<?php
/* @var $this Withholding_taxController */
/* @var $model withholding_tax */

$this->breadcrumbs=array(
	'Withholding Tax Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Withholding Tax Records', 'url'=>array('index')),
	array('label'=>'Create Withholding Tax Record', 'url'=>array('create')),
	array('label'=>'View Withholding Tax Records', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Withholding Tax Records', 'url'=>array('admin')),
);
?>

<h1>Update Withholding Tax Records <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>