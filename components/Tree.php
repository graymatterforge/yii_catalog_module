<?php
//component for display tree of category list
Yii::import('zii.widgets.CPortlet');

class Tree extends CPortlet
{
	public $title='Дерево категорий';
	public $template='tree/default';
	public $data=NULL;
	public $hide_category=NULL;
	public $url=NULL;
	//id
	//parent_id = id
	protected function renderContent()
	{
		$this->render($this->template,array('categories' => $this->data,'hide' => $this->hide_category,'url'=>$this->url));
	}
	
	
}