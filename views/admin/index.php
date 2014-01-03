<h1>Manage catalog</h1>
<?php  
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>";
    }
?>
<?php echo CHtml::link('Create element', Yii::app()->createAbsoluteUrl('catalog/admin/create_element')) ?></br>
<?php echo CHtml::link('Create category', Yii::app()->createAbsoluteUrl('catalog/admin/create_category')) ?></br>

<h4>List of categorys</h4>
 <?php $this->widget('Tree', array(
                'template' => 'tree/edit',
                'data' => $allCategorys,
                'title'=>'',
                'hide_category' => 1
            )); ?>