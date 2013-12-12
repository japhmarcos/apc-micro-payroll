<?php
/* @var $this PayrollController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Payroll Records',
);

$this->menu=array(
	array('label'=>'Create Payroll Record', 'url'=>array('create')),
	array('label'=>'Manage Payroll Records', 'url'=>array('admin')),
);
?>

<h1>Payrolls</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
