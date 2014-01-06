<h1>Catalog</h1>
<?php
$category_cur = '';
if(Yii::app()->controller->action->id == 'section')
{
	if(!empty($category_sections))
	{
		foreach ($category_sections as $key => $value) {
			if($value->id != 1)
			{
				$category_cur .= $value->name.'=>';
			}
			
		}
	}

	$category_cur .= $category;
	
}

$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>array(
        $category_cur
    ),
));
?>