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
    public $email;
    public $subject;
    public $attach;
    public $captcha;

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
            'name'    => 'ФИО',
            'email'   => 'Email',
            'subject' => 'Тема доклада',
            'attach'  => 'Файл с докладом (только *.doc и *.docx)',
            'captcha' => 'Код проверки',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function create()
    {
        $record          = new Application();
        $record->name    = $this->name;
        $record->email   = $this->email;
        $record->subject = $this->subject;
        $result = $record->save();
        if (!$result) {
            return false;
        } else {
            $this->attach = UploadedFile::getInstance($this, 'attach');
            $tempname = Yii::$app->getSecurity()->generateRandomString(50).'.'.$this->attach->extension;
            $this->attach->saveAs(Yii::getAlias('@webroot').'/uploads/'.$tempname);
            return true;
        }
    }

}