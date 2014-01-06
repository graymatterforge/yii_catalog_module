<h1><?php echo Yii::app()->controller->action->id ?></h1>
<?php
$category_cur = array('Catalog admin panel'=>array('/catalog/admin'), Yii::app()->controller->action->id);
if(Yii::app()->controller->action->id == 'show_category')
{
	if(!empty($category_sections))
	{
		foreach ($category_sections as $key => $value) {
			$category_cur[$value->name] = Yii::app()->createAbsoluteUrl('catalog/admin/show_category/'.$value->id) ;
		}
	}

	$category_cur[] = $category;
	
}

$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=> $category_cur
));
?>