<?php
/* @var $this DeductionsController */
/* @var $model deductions */

$this->breadcrumbs=array(
	'Salary Deductions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Salary Deductions', 'url'=>array('index')),
	array('label'=>'Create Salary Deduction', 'url'=>array('create')),
	array('label'=>'View Salary Deductions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Salary Deductions', 'url'=>array('admin')),
);
?>

<h1>Update Salary Deductions <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>