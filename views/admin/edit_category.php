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
   <?php echo CHtml::submitButton('Edit category',array('name' => 'edit_category')); ?>
</div>
<?php $this->endWidget(); ?>