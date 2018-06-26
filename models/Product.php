<?php
namespace app\models;
use yii\db\ActiveRecord;
/**
 * saf
 */
class Product extends ActiveRecord
{
	public static function tableName()
	{
		return 'products';
	}
	public function getCategories()
	{
		return $this->haOne(Category::className(), ['id'=>'parent']); // Связь один к одному hasOne returns 1 object or null
		// Table: Categories
		// id: int
		// title: string
		// parent: int
		// alias: string

		// Table: Products
		// id: int
		// title: string
		// alias: string
		// parent: int
		// content: string
		// image: string
		// price: string

	}
}
 ?>