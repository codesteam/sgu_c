<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

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
     * @return array the validation rules.
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
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name'          => 'ФИО',
            'report'        => 'Участие с докладом',
            'email'         => 'Email',
            'comment'       => 'Комментарий',
            'attach'        => 'Файл тезисов доклада',
            'captcha'       => 'Код проверки',
            'category_id'   => 'Научное направление',
            'members_count' => 'Количество авторов',
            'location'      => 'Страна, город',
            'profession'    => 'Место работы (полностью)',
            'rank'          => 'Должность, степень, звание',
            'post_address'  => 'Почтовый адрес (для переписки)',
            'phone'         => 'Контактные телефоны, факс',
        ];
    }

    /**
     *
     * @TODO check copy result
     * @TODO add DB transaction
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

        return true;
    }

    /**
     * @return array
     */
    public function membersCountSelector()
    {
        return array_combine(range(1, 7), range(1, 7));
    }

}