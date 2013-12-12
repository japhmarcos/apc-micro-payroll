<?php
/* @var $this UseraccountController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Accounts',
);

$this->menu=array(
	array('label'=>'Create User Account', 'url'=>array('create')),
	array('label'=>'Manage User Accounts', 'url'=>array('admin')),
);
?>

<h1>User Accounts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
