<?php
/* @var $this PayrollController */
/* @var $model payroll */

$this->breadcrumbs=array(
	'Payroll Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Payroll Records', 'url'=>array('index')),
	array('label'=>'Manage Payroll Records', 'url'=>array('admin')),
);
?>

<h1>Create Payroll Record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>