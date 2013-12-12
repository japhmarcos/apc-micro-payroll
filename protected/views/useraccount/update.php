<?php
/* @var $this UseraccountController */
/* @var $model useraccount */

$this->breadcrumbs=array(
	'User Accounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List All User Accounts', 'url'=>array('index')),
	array('label'=>'Create User Account', 'url'=>array('create')),
	array('label'=>'View User Account', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage User Accounts', 'url'=>array('admin')),
);
?>

<h1>Update User Account <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>