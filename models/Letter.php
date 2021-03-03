<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Letter extends Model {

    public $username;
    public $email;
    public $phone;
    public $message;

    public function rules() {
        return [
            [['email', 'username'], 'required'],
            ['email', 'email'],
            ['phone', 'integer'],
            ['message', 'string'],
        ];
    }

    public function attributeLabels() {
        return [
            'username' => 'Ваши ФИО*',
            'email' => 'Ваш Email*',
            'phone' => 'Ваш телефон +7',
            'message' => 'Ваше сообшение',
        ];
    }
    
    // отправка письма
    public function  mailout() {
// отправляем письмо с данными заказа на корпоративную почту
      
          Yii::$app->mailer->compose()
                        ->setFrom([Yii::$app->params['senderEmail'] => Yii::$app->params['senderName']])
                        ->setTo('shig-2011@mail.ru')
                        ->setSubject('Напишите нам')
                        ->setHtmlBody("<b><strong>$this->username</strong></b>"
                                . "<b>$this->phone</b>"
                                . "<b>$this->email</b>"
                               // . "<b>$model->date_begin</b>"
                                . "<b>$this->message</b>")
                        ->send();
             return TRUE;  
    }
    

}
