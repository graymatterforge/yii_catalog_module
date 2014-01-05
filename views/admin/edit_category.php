<?php $this->pageTitle='edit category'; ?>
<?php $this->renderPartial('_crumbs'); ?>
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
    'action' => Yii::app()->createAbsoluteUrl('catalog/admin/edit_category/'.$category->id),
    'htmlOptions' => array('id' => 'edit_category')
)); ?>

<?php echo $form->errorSummary($category); ?>
<div class="row">
    <?php //echo $form->dropDownlist($category,'id',CHtml::listData($allCategorys, 'id', 'name')); ?>
     <?php $this->widget('Tree', array(
                'template' => 'tree/select',
                'data' => $allCategorys,
                'title'=>'',
                'selected' => $parentCategory->id
            )); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($category,'name'); ?>
    <?php echo $form->textField($category,'name'); ?>
    <?php echo $form->error($category,'name'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($category,'meta_title'); ?>
    <?php echo $form->textField($category,'meta_title'); ?>
    <?php echo $form->error($category,'meta_title'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($category,'meta_keywords'); ?>
    <?php echo $form->textField($category,'meta_keywords'); ?>
    <?php echo $form->error($category,'meta_keywords'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($category,'meta_desc'); ?>
    <?php echo $form->textField($category,'meta_desc'); ?>
    <?php echo $form->error($category,'meta_desc'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($category,'sort'); ?>
    <?php echo $form->textField($category,'sort'); ?>
    <?php echo $form->error($category,'sort'); ?>
</div>

 <?php echo $form->hiddenField($category,'created_at',array('value' => date('Y-m-d',time() ) ) ); ?>
 <?php echo $form->hiddenField($category,'timestap_x',array('value' => time() ) ); ?>
<div class="row">
   <?php echo CHtml::submitButton('Edit category',array('name' => 'edit_category')); ?>
</div>
<?php $this->endWidget(); ?>