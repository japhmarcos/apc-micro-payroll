<?php
/* @var $this UseraccountController */
/* @var $model useraccount */

$this->breadcrumbs=array(
	'User Accounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All User Accounts', 'url'=>array('index')),
	array('label'=>'Manage User Accounts', 'url'=>array('admin')),
);
?>

<h1>Create User Account</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>