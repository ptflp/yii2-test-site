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
	public function getProducts()
	{
		return $this->hasMany(Product::className(), ['parent'=>'id']); // Связь один ко многим hasMany returns Array
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