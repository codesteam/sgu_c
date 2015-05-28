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
    public $subject;
    public $category_id;
    public $attach;
    public $captcha;
    public $comment;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'email', 'subject', 'body', 'attach'], 'required'],
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
            'name'        => 'ФИО',
            'report'      => 'Участие с докладом',
            'email'       => 'Email',
            'subject'     => 'Тема доклада',
            'attach'      => 'Файл тезисов доклада',
            'captcha'     => 'Код проверки',
            'category_id' => 'Научное направление',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     *
     * @TODO check copy result
     * @TODO add DB transaction
     */
    public function create()
    {
        $application              = new Application();
        $application->subject     = $this->subject;
        $application->category_id = $this->category_id;
        $result = $application->save();
        if (!$result) {
            return false;
        } else {
            // save members
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

            // save upload
            $this->attach = UploadedFile::getInstance($this, 'attach');
            $applicationFile                 = new ApplicationFile();
            $applicationFile->application_id = $application->id;
            $applicationFile->name           = Yii::$app->getSecurity()->generateRandomString(50).'.'.$this->attach->extension;
            $applicationFile->save();
            $this->attach->saveAs(Yii::getAlias('@webroot').'/uploads/'.$applicationFile->name);

            return true;
        }
    }

}