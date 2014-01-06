<?php 
if(isset($sub_sections))
{
	$category_sections = $sub_sections;
}
else {
	$category_sections = '';
}

$this->renderPartial('_crumbs',array('category' => $category->name,'category_sections' => $category_sections)); ?>
<ul class="catalog">
<?php foreach ($catalog as $key => $element): ?>
	<li class="item"><?php echo $element->name ?></li>

<?php endforeach ?>
</ul>

</br>
<?php
if(isset($pages))
{
	 $this->widget('XLinkPager', array(
    'pages' => $pages
	)) ;
}
?>