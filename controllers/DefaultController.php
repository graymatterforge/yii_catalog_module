<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	/*
	*	Get elements from section by section id like bitrix style
	*   Route main.php -> 'catalog/<id:\d+>'=>'catalog/default/section',
	*/
	public function actionSection($id)
	{
		$this->render('section');
	}

}