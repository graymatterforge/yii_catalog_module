<?php

class AdminController extends Controller
{
	/*
	*	Route main.php -> '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
	*/
	public function actionIndex()
	{
		//$allCategorys = Category::model()->findAll(array('order'=>'lft'));
		$category=Category::model()->findByPk(1);
		$allCategorys=$category->descendants()->findAll();
		$this->render('index',array('allCategorys' => $allCategorys));
	}

	/*
	*	Route main.php -> 'catalog/admin/show_category/<id:\d+>'=>'catalog/admin/show_category',
	*/
	public function actionShow_category($id)
	{
		$category=Category::model()->findByPk($id);
		$sub_sections=$category->descendants()->findAll();

		if(count($sub_sections) > 0)
		{
			$catalog = Catalog::model()->findAll('category=:category',array(':category' => $id));	
			foreach ($sub_sections as $key => $section) {
				$q = Catalog::model()->findAll('category=:category',array(':category' => $section->id));
				if($q)
				{
					$catalog = array_merge($catalog,$q);
				}
			}

		
		}
		else {
			$catalog = Catalog::model()->findAll('category=:category',array(':category' => $id));
		}
		$this->render('show_category',array('catalog' => $catalog) );
	}

	/*
	*	Route main.php -> '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
	*/
	public function actionCreate_element()
	{
		$catalog = new Catalog;
		$allCategorys = Category::model()->findAll(array('order'=>'lft'));
		if(isset($_POST['create_element']))
		{
			$catalog->attributes = $_POST['Catalog'];

			if($catalog->validate())
			{
				if(empty($_POST['Catalog']['count']))
				{
					$catalog->count = 1;
				}

				if(empty($_POST['Catalog']['meta_title']) )
				{
					$catalog->meta_title = $_POST['Catalog']['name'];
				}

				if(empty($_POST['Catalog']['meta_keywords']) )
				{
					$catalog->meta_keywords = $_POST['Catalog']['name'];
				}

				if(empty($_POST['Catalog']['meta_desc']) )
				{
					$catalog->meta_desc = $_POST['Catalog']['name'];
				}

				$catalog->save();
				Yii::app()->user->setFlash('create_element', "Element was created");
				$this->redirect(Yii::app()->createAbsoluteUrl('catalog/admin/create_element'));
			}
					
		}	
		$this->render('create_element',array('catalog' => $catalog,'allCategorys' => $allCategorys));
	}

	/*
	*	Route main.php -> '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
	*/
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
		//$category_root=Category::model()->findByPk(1);
		//$allCategorys=$category_root->descendants()->findAll();

		$this->render('create_category',array('category' => $category,'allCategorys' => $allCategorys));
	}

	/*
	* Route main.php -> catalog/admin/edit_category/<id:\d+> => catalog/admin/edit_category
	*/
	public function actionEdit_category($id)
	{
		$category = Category::model()->findByPk($id);
		$parent=$category->parent()->find();
		$allCategorys = Category::model()->findAll(array('order'=>'lft'));
		//$category_root=Category::model()->findByPk(1);
		//$allCategorys=$category_root->descendants()->findAll();

		if(isset($_POST['edit_category']))
		{
			$category->attributes = $_POST['Category'];
			if($category->validate())
			{
				$category->name = $_POST['Category']['name'];
				if($_POST['Category']['id'] != $id)
				{
					$root=Category::model()->findByPk($_POST['Category']['id']);
					$category->moveAsLast($root);
				}

				$category->saveNode();
				Yii::app()->user->setFlash('edit_category', "Category was updated");
				$this->redirect(Yii::app()->createAbsoluteUrl('catalog/admin/edit_category/'.$id));
			}
		}

		$this->render('edit_category',array('category' => $category,
											'allCategorys' => $allCategorys,
											'parentCategory' => $parent));
	}

	/*
	*	Route main.php -> 'catalog/admin/delete_category/<id:\d+>'=>'catalog/admin/delete_category'
	*/
	public function actionDelete_category($id)
	{
		$category = Category::model()->findByPk($id);
		$category->deleteNode();
		Yii::app()->user->setFlash('delete_category', "Category was deleted");
		$this->redirect(Yii::app()->createAbsoluteUrl('catalog/admin'));
	}
}