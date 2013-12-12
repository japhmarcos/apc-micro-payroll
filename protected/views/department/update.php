<?php
/* @var $this DepartmentController */
/* @var $model department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Departments', 'url'=>array('index')),
	array('label'=>'Create Department', 'url'=>array('create')),
	array('label'=>'View Departments', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Departments', 'url'=>array('admin')),
);
?>

<h1>Update Department <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>