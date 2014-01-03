<?php
$level=0;

foreach($categories as $n=>$category)
{
	if($category->level==$level)
		echo CHtml::closeTag('li')."\n";
	else if($category->level>$level)
		echo CHtml::openTag('ul')."\n";
	else
	{
		echo CHtml::closeTag('li')."\n";

		for($i=$level-$category->level;$i;$i--)
		{
			echo CHtml::closeTag('ul')."\n";
			echo CHtml::closeTag('li')."\n";
		}
	}

	echo CHtml::openTag('li');
	echo CHtml::encode($category->name)
	.':'.CHtml::link('Edit?', Yii::app()->createAbsoluteUrl('catalog/admin/edit_category/'.$category->id))
	.':'.CHtml::link('Delete?', Yii::app()->createAbsoluteUrl('catalog/admin/delete_category/'.$category->id),array('onclick' => 'return con_firm();return false'));
	$level=$category->level;
}

for($i=$level;$i;$i--)
{
	echo CHtml::closeTag('li')."\n";
	echo CHtml::closeTag('ul')."\n";
}
?>
<script type="text/javascript">
function con_firm()
{
	var conf = confirm('Are u sure for delete category');
	if(conf)
	{
		return true;
	}
	else {
		return false;
	}
}
</script>