<?php 

class Catalog extends CActiveRecord
{
	
	public $category;
	public $name;

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog}}';
	}


	public function rules()
	{
		return array(
			// username and password are required
			array('name,created_at', 'required'),
		);
	}


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'name' => 'Name',
			'category' => 'Category'
		);
	}

	public function beforeSave()
	{
		if(parent::beforeSave())
		{
			if(empty($_POST['Catalog']['category']))
			{
				$this->category = 1;
				return true;
			}
			else {
				$this->category = $_POST['Catalog']['category'];
				return true;
			}
			
		}
		
	}
	
}