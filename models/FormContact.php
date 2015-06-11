<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\Expression;

/**
 * ContactForm is the model behind the contact form.
 */
class FormContact extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
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
            'name'    => 'Имя',
            'email'   => 'Email',
            'subject' => 'Тема обращения',
            'body'    => 'Текст обращения',
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
            $ticket             = new Ticket();
            $ticket->subject    = $this->subject;
            $ticket->created_at = new Expression('NOW()');
            $ticket->save();

            $ticketMessage             = new TicketMessage();
            $ticketMessage->ticket_id  = $ticket->id;
            $ticketMessage->email      = $this->email;
            $ticketMessage->body       = $this->body;
            $ticketMessage->created_at = new Expression('NOW()');
            $ticketMessage->save();

            return true;
        } else {
            return false;
        }
    }
}
