<?php
/* @var $this UseraccountController */
/* @var $model useraccount */

$this->breadcrumbs=array(
	'User Accounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List All User Accounts', 'url'=>array('index')),
	array('label'=>'Create User Account', 'url'=>array('create')),
	array('label'=>'Update User Account', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User Account', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User Accounts', 'url'=>array('admin')),
);
?>

<h1>View User Account #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		'username',
		'password',
		'userType',
	),
)); ?>
