<?php

namespace app\models;

use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class TestForm extends Model
{
    public $name;
    public $email;
    public $text;

    public function attributeLabels()
    {
        return [
            'name'=> 'Имя',
            'email' => 'E-mail',
            'text' => 'Текст сообщения'
        ];
    }
    public function rules()
    {
        return [
            [['name','email'],'required','message'=>'не может быть пустым'],
        ];
    }
}