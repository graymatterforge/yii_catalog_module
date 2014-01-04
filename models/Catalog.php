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
			array('category,preview_text,detail_text,sort,count,meta_title,meta_keywords,meta_desc','safe')
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
			'category' => 'Category',
			'preview_text' => 'Preview text',
			'detail_text' => 'Detail text',
			'sort' => 'Sort',
			'count' => 'Count',
			'meta_title' => 'Meta title',
			'meta_desc' => 'Meta description',
			'meta_keywords' => 'Meta keywords',
			'created_at' => 'Created at'	
		);
	}

	
	
}