<?php
/* @var $this PayrollController */
/* @var $model payroll */

$this->breadcrumbs=array(
	'Payroll Record'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Payroll Records', 'url'=>array('index')),
	array('label'=>'Create Payroll Record', 'url'=>array('create')),
	array('label'=>'Update Payroll Records', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Payroll Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Payroll Records', 'url'=>array('admin')),
);
?>

<h1>View Payroll Records #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		'payroll_date',
		'payroll_month',
		'payroll_dateRange',
		'payroll_year',
		'payroll_totalNetPayBeforeTax',
		'payroll_withholdingTax',
		'payroll_totalNetPayAfterTax',
	),
)); ?>
