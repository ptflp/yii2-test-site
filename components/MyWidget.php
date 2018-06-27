<?php
namespace app\components;
use yii\base\Widget;

/**
 * j
 */
class MyWidget extends Widget
{
	public $name;
	public function init()
	{
			parent::init();
			if($this->name === null || $this->name === false) $this->name='Гость';
	}
	public function run()
	{
		return "<h1>{$this->name}, Hello World</h1>";
	}
}
 ?>