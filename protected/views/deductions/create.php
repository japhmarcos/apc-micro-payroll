<?php
/* @var $this DeductionsController */
/* @var $model deductions */

$this->breadcrumbs=array(
	'Salary Deductions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Salary Deductions', 'url'=>array('index')),
	array('label'=>'Manage Salary Deductions', 'url'=>array('admin')),
);
?>

<h1>Create Salary Deduction</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>