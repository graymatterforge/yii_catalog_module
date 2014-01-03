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
    'action' => Yii::app()->createAbsoluteUrl('catalog/admin/create_element'),
    'htmlOptions' => array('id' => 'create_element')
)); ?>

<h3>add element</h3>
<?php echo $form->errorSummary($catalog); ?>

<div class="row">
    <?php echo $form->labelEx($catalog,'name'); ?>
    <?php echo $form->textField($catalog,'name'); ?>
    <?php echo $form->error($catalog,'name'); ?>
</div>

<div class="row">
    <?php echo $form->labelEx($catalog,'category'); ?>
    <?php echo $form->textField($catalog,'category'); ?>
    <?php echo $form->error($catalog,'category'); ?>
</div>
 <?php echo $form->hiddenField($catalog,'created_at',array('value' => date('Y-m-d',time() ) ) ); ?>
<div class="row">
   <?php echo CHtml::submitButton('Create element',array('name' => 'create_element')); ?>
</div>
<?php $this->endWidget(); ?>