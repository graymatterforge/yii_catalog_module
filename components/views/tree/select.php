<?php
$level=0;
echo '<select name="'.$this->name.'">';
foreach($categories as $n=>$category)
{
	if($category->level==$level)
		echo '</option>';
	else if($category->level>$level)
		echo '';
	else
	{
		echo '</option>';

		for($i=$level-$category->level;$i;$i--)
		{
			echo '';
			echo '</option>';
		}
	}

	if($this->selected == $category->id ) 
	{
		$selected = 'selected';
	}
	else {
		$selected = '';
	}

	echo '<option '.$selected.' value="'.$category->id.'">';
	echo str_repeat('.', $category->level).CHtml::encode($category->name);
	$level=$category->level;
}

for($i=$level;$i;$i--)
{
	echo '</option>';
}
echo '</select>';
?>