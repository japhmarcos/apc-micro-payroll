<?php
/* @var $this DepartmentController */
/* @var $model department */

$this->breadcrumbs=array(
	'Departments'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Departments', 'url'=>array('index')),
	array('label'=>'Manage Departments', 'url'=>array('admin')),
);
?>

<h1>Create Department</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>