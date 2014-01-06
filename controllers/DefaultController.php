<?php

class DefaultController extends Controller
{

	public $elementsPerPage = 10;
	public $elementsSort = 'ORDER BY id DESC';
	
	public function actionIndex()
	{
		$this->render('index');
	}

	/*
	*	Get elements from section by section id like bitrix style
	*   Route main.php -> 'catalog/<id:\d+>'=>'catalog/default/section',
	*/
	public function actionSection($id = 1)
	{

		$category=Category::model()->findByPk($id);
		$allCategorys = Category::model()->findAll(array('order'=>'lft'));
		$sub_sections=$category->descendants()->findAll();
		if(count($sub_sections) > 0)
		{
			/*
			$catalog = Catalog::model()->findAll('category=:category '.$this->elementsSort,array(':category' => $id));	
			foreach ($sub_sections as $key => $section) {
				$q = Catalog::model()->findAll('category=:category '.$this->elementsSort,
											array(':category' => $section->id) );
				if($q)
				{
					$catalog = array_merge($catalog,$q);
				}
			}
			*/
			$section_ids = array($id);

			foreach ($sub_sections as $key => $section) {
				$section_ids[] = $section->id;	
			}
			$criteria=new CDbCriteria();
			$criteria->addInCondition('category',$section_ids); 
		    $count=Catalog::model()->count($criteria);
		    $pages=new CPagination($count);

		    // results per page
		    $pages->pageSize= Yii::app()->getModule('catalog')->params['elementsPerPage'];
		    $pages->applyLimit($criteria); 
		   
		    $catalog=Catalog::model()->findAll($criteria);
		    /*
			* Pagination route main.php -> 'catalog/admin/show_category/<id:\d+>/<page:\d+>'=>'catalog/admin/show_category',
			* Custom page url in protected/components/xlinkpager.php
		    */

		    $descendants=$category->ancestors()->findAll();

			$this->render('section',array('catalog' => $catalog,
												'pages' => $pages,
												'category' => $category,
												'sub_sections' => $descendants,
												'allCategorys' => $allCategorys) );
		}
		else {
			$descendants=$category->ancestors()->findAll();

			$criteria=new CDbCriteria();
			$criteria->addInCondition('category',array($id)); 
		    $count=Catalog::model()->count($criteria);
		    $pages=new CPagination($count);

		    // results per page
		    $pages->pageSize= $this->elementsPerPage;
		    $pages->applyLimit($criteria); 
		   
		    $catalog=Catalog::model()->findAll($criteria);

			//$catalog = Catalog::model()->findAll('category=:category '.$this->elementsSort,array(':category' => $id));
			
			$this->render('section',array('catalog' => $catalog,
												'pages' => $pages,
												'category' => $category,
												'sub_sections' => $descendants,
												'allCategorys' => $allCategorys) );
		}
	}

}