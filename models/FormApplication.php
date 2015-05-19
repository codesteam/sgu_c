<?php

namespace app\models;

use Yii;
use yii\base\Model;

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
            [['name', 'email', 'subject', 'body'], 'required'],
            ['email', 'email'],
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
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        } else {
            return false;
        }
    }

}