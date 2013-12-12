<?php
/* @var $this EarningsController */
/* @var $model earnings */

$this->breadcrumbs=array(
	'Earnings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List All Earnings', 'url'=>array('index')),
	array('label'=>'Create Earnings Record', 'url'=>array('create')),
	array('label'=>'Update Earnings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Earnings Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Earnings', 'url'=>array('admin')),
);
?>

<h1>View Earnings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		'earnings_date',
		'earnings_periodMonth',
		'earnings_periodDateRange',
		'earnings_periodYear',
		'earnings_totalWorkingHours',
		'earnings_totalAllowancePerDay',
		'earnings_otherEarnings',
		'earnings_overtime',
		'earnings_specialHoliday',
		'earnings_specialHolidayOnRestDay',
		'earnings_regularHoliday',
		'earnings_regularHolidayOnRestDay',
		'earnings_totalOvertimeOnHoliday',
		'earnings_totalOvertimeOnRestDay',
		'earnings_totalGross',
	),
)); ?>
