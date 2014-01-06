<?php 
if(isset($sub_sections))
{
	$category_sections = $sub_sections;
}
else {
	$category_sections = '';
}

$this->renderPartial('_crumbs',array('category' => $category->name,'category_sections' => $category_sections)); ?>
<?php $this->widget('Tree', array(
                'data' => $allCategorys,
                'title'=>''
            )); ?></br>
<?php $this->widget('Cart', array()); ?>

<ul class="catalog" style="float:left">
<?php foreach ($catalog as $key => $element): ?>
	<li style="float:left;width:200px;list-style-type:none" class="item">
		<?php echo $element->name ?></br>
		<?php echo empty($element->price1) ? 'Not in shop' : $element->price1.' '.Yii::app()->getModule('catalog')->params['valute'] ?></br>
		<?php echo CHtml::textField('count',1,array('class' => 'form-control','style' => 'width:50px;text-align:center')) ?>
		<?php echo CHtml::submitButton('buy',array('class' => 'form-control','style' => 'width:50px')) ?></br>
	</li>

<?php endforeach ?>
</ul>

</br>

<div style="clear:both">
<?php
if(isset($pages))
{
	 $this->widget('XLinkPager', array(
    'pages' => $pages
	)) ;
}
?></div>