<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class TestForm extends ActiveRecord
{

    public static function tableName()
    {
        return 'posts';
    }
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
            [['name','text'],'required'],
            ['email','email'],
        ];
    }
}