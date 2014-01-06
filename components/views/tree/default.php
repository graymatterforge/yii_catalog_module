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
	echo CHtml::link($category->name,Yii::app()->createAbsoluteUrl('catalog/'.$category->id));
	$level=$category->level;
}

for($i=$level;$i;$i--)
{
	echo CHtml::closeTag('li')."\n";
	echo CHtml::closeTag('ul')."\n";
}
?>