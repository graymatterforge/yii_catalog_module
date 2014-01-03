<?php
$level=0;
echo '<select name="Category[id]">';
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

	echo '<option value="'.$category->id.'">';
	echo str_repeat('.', $category->level).CHtml::encode($category->name);
	$level=$category->level;
}

for($i=$level;$i;$i--)
{
	echo '</option>';
}
echo '</select>';
?>