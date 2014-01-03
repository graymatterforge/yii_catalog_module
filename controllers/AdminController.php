<?php

class AdminController extends Controller
{
	public function actionIndex()
	{
		$allCategorys = Category::model()->findAll(array('order'=>'lft'));
		$this->render('index',array('allCategorys' => $allCategorys));
	}

	public function actionCreate_element()
	{
		$catalog = new Catalog;
		if(isset($_POST['create_element']))
		{
			$catalog->attributes = $_POST['Catalog'];

			if($catalog->validate())
			{
				$catalog->save();
				Yii::app()->user->setFlash('create_element', "Element was created");
				$this->redirect(Yii::app()->createAbsoluteUrl('catalog/admin/create_element'));
			}
					
		}	
		$this->render('create_element',array('catalog' => $catalog));
	}

	public function actionCreate_category()
	{
		$category = new Category;
		if(isset($_POST['create_category']))
		{
			$category->attributes = $_POST['Category'];
			if($category->validate())
			{
				$category->name = $_POST['Category']['name'];
				$root=Category::model()->findByPk($_POST['Category']['id']);
				$category->appendTo($root);
				Yii::app()->user->setFlash('create_category', "Category was created");
				$this->redirect(Yii::app()->createAbsoluteUrl('catalog/admin/create_category'));
			}
		}
		$allCategorys = Category::model()->findAll(array('order'=>'lft'));

		$this->render('create_category',array('category' => $category,'allCategorys' => $allCategorys));
	}

	public function actionEdit_category()
	{
		
	}

	public function actionDelete_category()
	{
		$category = Category::model()->findByPk($_GET['id']);
		$category->deleteNode();
		Yii::app()->user->setFlash('delete_category', "Category was deleted");
		$this->redirect(Yii::app()->createAbsoluteUrl('catalog/admin'));
	}
}