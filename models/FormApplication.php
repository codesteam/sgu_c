<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;
use app\helpers\Mailer;

/**
 * Application create form
 */
class FormApplication extends Model
{
    public $name;
    public $report;
    public $email;
    public $category_id;
    public $attach;
    public $captcha;
    public $comment;
    public $members;
    public $location;
    public $profession;
    public $rank;
    public $post_address;
    public $phone;
    public $members_count;

    /**
     * Customized attribute labels
     *
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'name'          => Yii::t('application', 'Fullname'),
            'report'        => Yii::t('application', 'Report'),
            'email'         => Yii::t('application', 'Email'),
            'comment'       => Yii::t('application', 'Comment'),
            'attach'        => Yii::t('application', 'Attach'),
            'captcha'       => Yii::t('application', 'Captcha'),
            'category_id'   => Yii::t('application', 'Category_id'),
            'members_count' => Yii::t('application', 'Members count'),
            'location'      => Yii::t('application', 'Location'),
            'profession'    => Yii::t('application', 'Profession'),
            'rank'          => Yii::t('application', 'Rank'),
            'post_address'  => Yii::t('application', 'Post address'),
            'phone'         => Yii::t('application', 'Phone'),
        ];
    }

    /**
     * Validation rules
     *
     * @return array
     */
    public function rules()
    {
        return [
            [['name', 'email', 'category_id'], 'required'],
            ['email', 'email'],
            ['members', 'checkMembers'],
            [['comment', 'phone', 'location', 'profession', 'rank', 'post_address'], 'safe'],
            ['attach', 'file', 'extensions' => ['doc', 'docx']],
            ['captcha', 'captcha'],
        ];
    }

    /**
     * Members validation
     *
     * @param string $attribute attribute for validation
     *
     * @return void
     */
    public function checkMembers($attribute)
    {
        if (!empty($this->$attribute)) {
            foreach ($this->$attribute as &$member) {
                $member['name']         = isset($member['name'])         ? $member['name']         : '';
                $member['email']        = isset($member['email'])        ? $member['name']         : '';
                $member['phone']        = isset($member['phone'])        ? $member['phone']        : '';
                $member['location']     = isset($member['location'])     ? $member['location']     : '';
                $member['profession']   = isset($member['profession'])   ? $member['profession']   : '';
                $member['rank']         = isset($member['rank'])         ? $member['rank']         : '';
                $member['post_address'] = isset($member['post_address']) ? $member['post_address'] : '';
            }
            unset($member);
        }
    }

    /**
     * Create application with all needed relations
     *
     * @TODO check copy result
     * @TODO add DB transaction
     *
     * @return bool
     */
    public function create()
    {
        if (!$this->validate()) {
            return false;
        }

        // create application
        $application              = new Application();
        $application->comment     = $this->comment;
        $application->category_id = $this->category_id;
        $application->hash        = Yii::$app->getSecurity()->generateRandomString(32);
        $result = $application->save();
        if (!$result) {
            return false;
        } 

        // save common member
        $member                 = new ApplicationMember();
        $member->application_id = $application->id;
        $member->name           = $this->name;
        $member->email          = $this->email;
        $member->phone          = $this->phone;
        $member->location       = $this->location;
        $member->profession     = $this->profession;
        $member->rank           = $this->rank;
        $member->post_address   = $this->post_address;
        $member->save();

        // save other members
        if (!empty($this->members)) {
            foreach ($this->members as $row) {
                $member                 = new ApplicationMember();
                $member->application_id = $application->id;
                $member->name           = $row['name'];
                $member->email          = $row['email'];
                $member->phone          = $row['phone'];
                $member->location       = $row['location'];
                $member->profession     = $row['profession'];
                $member->rank           = $row['rank'];
                $member->post_address   = $row['post_address'];
                $member->save();
            }
        }

        // save upload
        $this->attach = UploadedFile::getInstance($this, 'attach');
        if (!empty($this->attach)) {
            $applicationFile                 = new ApplicationFile();
            $applicationFile->application_id = $application->id;
            $applicationFile->name           = Yii::$app->getSecurity()->generateRandomString(50).'.'.$this->attach->extension;
            $applicationFile->save();
            $this->attach->saveAs(Yii::getAlias('@webroot').'/uploads/'.$applicationFile->name);
        }

        // notify user
        Mailer::applicationCreated($application);

        return true;
    }

    /**
     * Return data for members selector
     *
     * @return array
     */
    public function membersCountSelector()
    {
        return array_combine(range(1, 7), range(1, 7));
    }
}