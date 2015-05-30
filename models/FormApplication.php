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
    public $members_count;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'body', 'attach'], 'required'],
            ['email', 'email'],
            ['attach', 'file', 'extensions' => ['doc', 'docx']],
            ['captcha', 'captcha'],
        ];
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
        $result = $application->save();
        if (!$result) {
            return false;
        } 

        // save common member
        $member                 = new ApplicationMember();
        $member->application_id = $application->id;
        $member->name           = $this->name;
        $member->email          = $this->email;
        $member->phone          = '';
        $member->location       = '';
        $member->profession     = '';
        $member->rank           = '';
        $member->post_address   = '';
        $member->save();

        // save other members
        foreach ($this->members as $member) {
            $member                 = new ApplicationMember();
            $member->application_id = $application->id;
            $member->name           = isset($member['name'])         ? $member['name']         : '';
            $member->email          = isset($member['email'])        ? $member['name']         : '';
            $member->phone          = isset($member['phone'])        ? $member['phone']        : '';
            $member->location       = isset($member['location'])     ? $member['location']     : '';
            $member->profession     = isset($member['profession'])   ? $member['profession']   : '';
            $member->rank           = isset($member['rank'])         ? $member['rank']         : '';
            $member->post_address   = isset($member['post_address']) ? $member['post_address'] : '';
            $member->save();
        }

        // save upload
        $this->attach = UploadedFile::getInstance($this, 'attach');
        $applicationFile                 = new ApplicationFile();
        $applicationFile->application_id = $application->id;
        $applicationFile->name           = Yii::$app->getSecurity()->generateRandomString(50).'.'.$this->attach->extension;
        $applicationFile->save();
        $this->attach->saveAs(Yii::getAlias('@webroot').'/uploads/'.$applicationFile->name);

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