<?php 
namespace app\models;
use yii\db\ActiveRecord;
/**
 * saf
 */
class Category extends ActiveRecord
{
	public static function tableName()
	{
		return 'categories';
	}
}
 ?>