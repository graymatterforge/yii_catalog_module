<?php $this->pageTitle='show category'; ?>
<?php $this->renderPartial('_crumbs'); ?>
<?php  
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>";
    }
?>
<?php //echo '<pre>'; print_r($catalog);echo '</pre>'; ?>
<?php foreach ($catalog as $key => $element): ?>
	<?php echo $element->name ?></br>
<?php endforeach ?>

<?php
if(isset($pages))
{
	 $this->widget('XLinkPager', array(
    'pages' => $pages
	)) ;
}
?>