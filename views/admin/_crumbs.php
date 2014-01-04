<h1><?php echo Yii::app()->controller->action->id ?></h1>
<?php
$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>array(
        'Catalog admin panel'=>array('/catalog/admin'),
        Yii::app()->controller->action->id,
    ),
));
?>