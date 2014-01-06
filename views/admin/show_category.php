<?php $this->pageTitle='show category'; ?>
<?php 
if(isset($sub_sections))
{
	$category_sections = $sub_sections;
}
else {
	$category_sections = '';
}
$this->renderPartial('_crumbs',array('category' => $category->name,'category_sections' => $category_sections)); 

?>

<?php  
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>";
    }
?>
<?php //echo '<pre>'; print_r($catalog);echo '</pre>'; ?>
<?php foreach ($catalog as $key => $element): ?>
	<?php echo $element->name ?>:<?php echo CHtml::link('Edit?',Yii::app()->createAbsoluteUrl('catalog/admin/edit_element/'.$element->id)) ?>
:<?php echo CHtml::link('Delete?',Yii::app()->createAbsoluteUrl('catalog/admin/delete_element/'.$element->id.'/?cat='.$category->id),array('onclick' => 'return con_firm();return false')) ?></br>
<?php endforeach ?>

<?php
if(isset($pages))
{
	 $this->widget('XLinkPager', array(
    'pages' => $pages
	)) ;
}
?>
<script type="text/javascript">
function con_firm()
{
	var conf = confirm('Are u sure for delete element');
	if(conf)
	{
		return true;
	}
	else {
		return false;
	}
}
</script>