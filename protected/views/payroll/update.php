<?php
/* @var $this PayrollController */
/* @var $model payroll */

$this->breadcrumbs=array(
	'Payroll Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Payroll Records', 'url'=>array('index')),
	array('label'=>'Create Payroll Record', 'url'=>array('create')),
	array('label'=>'View Payroll Records', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Payroll Records', 'url'=>array('admin')),
);
?>

<h1>Update Payroll Records <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>