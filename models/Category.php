<?php 

class Category extends CActiveRecord
{

	public function behaviors()
	{
	    return array(
	        'nestedSetBehavior'=>array(
	            'class'=>'application.modules.catalog.ext.NestedSetBehavior',
	            'leftAttribute'=>'lft',
	            'rightAttribute'=>'rgt',
	            'levelAttribute'=>'level',
	        ),
	    );
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{catalog_category}}';
	}


	public function rules()
	{
		return array(
			// username and password are required
			array('name', 'required'),
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
			'lft' => 'Left margin',
			'rgt' => 'Right margin',
			'level' => 'Level'
		);
	}

	
	
}