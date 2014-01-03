<h1>Manage catalog</h1>
<?php  
    foreach(Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-' . $key . '">' . $message . "</div>";
    }
?>
<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'method' => 'post',
    'action' => Yii::app()->createAbsoluteUrl('catalog/admin/create_category'),
    'htmlOptions' => array('id' => 'create_category')
)); ?>

<h3>add category</h3>
<?php echo $form->errorSummary($category); ?>
<div class="row">
    <?php //echo $form->dropDownlist($category,'id',CHtml::listData($allCategorys, 'id', 'name')); ?>
     <?php $this->widget('Tree', array(
                'template' => 'tree/select',
                'data' => $allCategorys,
                'title'=>'',
            )); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($category,'name'); ?>
    <?php echo $form->textField($category,'name'); ?>
    <?php echo $form->error($category,'name'); ?>
</div>

 <?php echo $form->hiddenField($category,'created_at',array('value' => date('Y-m-d',time() ) ) ); ?>
<div class="row">
   <?php echo CHtml::submitButton('Create category',array('name' => 'create_category')); ?>
</div>
<?php $this->endWidget(); ?>