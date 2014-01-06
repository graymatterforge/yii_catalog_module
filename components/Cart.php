<?php
//component for display tree of category list
Yii::import('zii.widgets.CPortlet');

class Cart extends CPortlet
{
	public $title='Cart';
	public $template='cart/default';
	public $data=NULL;
	//id
	//parent_id = id
	protected function renderContent()
	{
		$this->render($this->template);
	}
	
	
}