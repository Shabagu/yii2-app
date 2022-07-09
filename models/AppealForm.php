<?php

namespace app\models;
use yii\base\Model;

class AppealForm extends Model {

    public $name;
    public $code;
    public $email;
    public $text;

    public function attributeLabels() {
        return [
            'name' => 'Ваше имя',
            'code' => 'Ваш кодовый номер',
            'email' => 'Ваш адрес электронной почты',
            'text' => 'Текст вашего обращения',
        ];
    }

    public function rules() {
        return [
//            ['name', 'required'],
//            ['email', 'required'],
            [
                ['name', 'email'],
                'required',
//                'message' => 'Поле обязательно к заполнению!',
            ],
            ['email', 'email'],
            ['name', 'string' ,'min' => 2],
            ['code', 'string',
//                'min' => 3,
//                'max' => 6,
                'length' => [3, 6],
                'tooShort' => 'Минимальная длина кода - 3 символа. Если вы не знаете, что это - не заполняйте данное поле',
                'tooLong' => 'Максимальная длина кода - 6 символов. Если вы не знаете, что это - не заполняйте данное поле',
            ],
//            ['text', 'required'],
//            ['text', 'safe'],
            ['text', 'trim'],
            ['code', 'codeValidator'],
        ];
    }

    public function codeValidator($attr) {
        if (!in_array($this->$attr, ['', '123456'])) {
            $this->addError($attr, 'Ваш кодовый номер недействителен! Введите корректный код или очистите поле');
        }
    }
}
