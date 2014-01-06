<?php $this->pageTitle='edit element'; ?>
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
    'action' => Yii::app()->createAbsoluteUrl('catalog/admin/edit_element/'.$catalog->id),
    'htmlOptions' => array('id' => 'edit_element')
)); ?>


<?php echo $form->errorSummary($catalog); ?>
<div class="row">
    <p>Catregory of good (*uncategorized not used in public)</p>
<?php echo $form->labelEx($catalog,'category'); ?><?php $this->widget('Tree', array(
                'template' => 'tree/select',
                'data' => $allCategorys,
                'title'=>'',
                'name' => 'Catalog[category]',
                'selected' => $parentCategory->id
            )); ?>
        </div>
    </br>
<div class="row">
    <p>Name of good</p>
    <?php echo $form->labelEx($catalog,'name'); ?>
    <?php echo $form->textField($catalog,'name'); ?>
    <?php echo $form->error($catalog,'name'); ?>
</div>
<div class="row">
    <p>Preview text of good</p>
    <?php echo $form->labelEx($catalog,'preview_text'); ?>
    <?php echo $form->textField($catalog,'preview_text'); ?>
    <?php echo $form->error($catalog,'preview_text'); ?>
</div>
<div class="row">
    <p>Detail text of good</p>
    <?php echo $form->labelEx($catalog,'detail_text'); ?>
    <?php echo $form->textField($catalog,'detail_text'); ?>
    <?php echo $form->error($catalog,'detail_text'); ?>
</div>
<div class="row">
    <p>Sort</p>
    <?php echo $form->labelEx($catalog,'sort'); ?>
    <?php echo $form->textField($catalog,'sort',array('value' => 500)); ?>
    <?php echo $form->error($catalog,'sort'); ?>
</div>


<div class="row">
     <p>prices</p>
    <?php echo $form->labelEx($catalog,'price1'); ?>
    <?php echo $form->textField($catalog,'price1'); ?>
    <?php echo $form->error($catalog,'price1'); ?>
    <p>Count of elements,after order count comedown</p>
    <?php echo $form->labelEx($catalog,'count'); ?>
    <?php echo $form->textField($catalog,'count'); ?>
    <?php echo $form->error($catalog,'count'); ?>
</div>
<p>Meta information</p>
<div class="row">
    <?php echo $form->labelEx($catalog,'meta_title'); ?>
    <?php echo $form->textField($catalog,'meta_title'); ?>
    <?php echo $form->error($catalog,'meta_title'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($catalog,'meta_keywords'); ?>
    <?php echo $form->textField($catalog,'meta_keywords'); ?>
    <?php echo $form->error($catalog,'meta_keywords'); ?>
</div>
<div class="row">
    <?php echo $form->labelEx($catalog,'meta_desc'); ?>
    <?php echo $form->textField($catalog,'meta_desc'); ?>
    <?php echo $form->error($catalog,'meta_desc'); ?>
</div>

</br>
 <?php echo $form->hiddenField($catalog,'created_at',array('value' => date('Y-m-d',time() ) ) ); ?>
<div class="row">
   <?php echo CHtml::submitButton('Edit element',array('name' => 'edit_element')); ?>
</div>
<?php $this->endWidget(); ?>