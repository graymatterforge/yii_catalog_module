<h1><?php echo Yii::app()->controller->action->id ?></h1>
<?php
$category_cur = '';
if(Yii::app()->controller->action->id == 'show_category')
{
	if(!empty($category_sections))
	{
		foreach ($category_sections as $key => $value) {
			$category_cur .= $value->name.'=>';
		}
	}

	$category_cur .= $category;
	
}

$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>array(
        'Catalog admin panel'=>array('/catalog/admin'), 
        Yii::app()->controller->action->id,$category_cur
    ),
));
?>