<?php
	namespace app\models;

	use Yii;
	use yii\base\Model;
	
	class FormAdd extends Model
	{
		public $name, $m, $s, $l, $xl, $xxl, $xxxl, $price;
		public $names = [], $ss = [], $ms = [], $ls = [], $xls = [], $xxls = [], $xxxls = [], $prices = [], $article = [];
		
		public function rules(){
			return [
				// username and password are both required
				[['ss', 'names', 'ms', 'ls', 'xls', 'xxls', 'xxxls', 'prices', 'article'], 'required', 'message' => ''],
				// rememberMe must be a boolean value
				['name', 'default', 'message' => ''],
				['s', 'number', 'message' => ''],
				['m', 'number', 'message' => ''],
				['l', 'number', 'message' => ''],
				['xl', 'number', 'message' => ''],
				['xxl', 'number', 'message' => ''],
				['xxxl', 'number', 'message' => ''],
				['price', 'number', 'message' => ''],
				['article', 'default', 'message' => '']
			];
		}
		
	}
?>
