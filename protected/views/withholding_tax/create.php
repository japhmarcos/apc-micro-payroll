<?php
/* @var $this Withholding_taxController */
/* @var $model withholding_tax */

$this->breadcrumbs=array(
	'Withholding Tax Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Withholding Tax Records', 'url'=>array('index')),
	array('label'=>'Manage Withholding Tax Records', 'url'=>array('admin')),
);
?>

<h1>Create Withholding Tax Record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>