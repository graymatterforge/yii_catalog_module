<h1>Catalog</h1>
<?php
$category_cur = '';
if(Yii::app()->controller->action->id == 'section')
{
	if(!empty($category_sections))
	{
		foreach ($category_sections as $key => $value) {
			
				$category_cur[$value->name] = Yii::app()->createAbsoluteUrl('catalog/'.$value->id) ;

			
		}
	}

	$category_cur[] = $category;
	
}

$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=> $category_cur
));
?>