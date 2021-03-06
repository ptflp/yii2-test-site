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
    public $min=4;
    public $max=15;

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
            [['name','email'],'required'],
            ['email','email'],
            ['name','string','min'=>$this->min],
            ['name','string','max'=>$this->max],
            ['name','myRule'],
            ['text','safe']
        ];
    }
    public function myRule($attr)
    {
        if (!in_array($this->$attr, ['hello','world'])) {
            $this->addError($attr,'БЛЯТЬ!');
        }
    }
}