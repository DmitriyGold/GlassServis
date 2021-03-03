<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\models\User;

class Signup extends Model {

    public $username;
    public $password;
    public $email;
    public $phone;
    private $_user = false;

    public function rules() {
        return [
            [['username', 'password', 'email'], 'required'],
            ['email', 'email'],
            ['username', 'unique', 'targetClass' => 'app\models\User'], // валидация
            ['phone', 'integer', 'max' => 9999999999],
            ['password', 'string', 'min' => 4, 'max' => 10],
        ];
    }

    public function attributeLabels() {
        return [
            'username' => 'Логин*',
            'password' => 'Пароль*',
            'email' => 'e-mail*',
            'phone' => 'телефон +7',
        ];
    }

    public function signup() {

        $user = new User();
        $user->username = $this->username;
        $user->password = Yii::$app->getSecurity()->generatePasswordHash($this->password);
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->save();
             return Yii::$app->user->login($this->getUser());
    }

    public function getUser() {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

}
