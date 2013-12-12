<?php
/* @var $this DeductionsController */
/* @var $model deductions */

$this->breadcrumbs=array(
	'Salary Deductions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List All Salary Deductions', 'url'=>array('index')),
	array('label'=>'Create Salary Deduction', 'url'=>array('create')),
	array('label'=>'Update Salary Deductions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Salary Deduction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salary Deductions', 'url'=>array('admin')),
);
?>

<h1>View Salary Deductions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		array(               
            'label'=>'Earnings',
            'type'=>'raw',
            'value'=>CHtml::encode($model->earnings->earnings_totalGross),
        ),
		array(               
            'label'=>'Philhealth Contribution',
            'type'=>'raw',
            'value'=>CHtml::encode($model->philhealth->philhealth_totalDeduction),
        ),
		array(               
            'label'=>'SSS Contribution',
            'type'=>'raw',
            'value'=>CHtml::encode($model->sss->sss_totalDeduction),
        ),
		array(               
            'label'=>'Pagibig Contribution',
            'type'=>'raw',
            'value'=>CHtml::encode($model->pagibig->pagibig_totalMonthlyDeduction),
        ),
		'deductions_date',
		'deductions_periodMonth',
		'deductions_periodDateRange',
		'deductions_periodYear',
		'deductions_otherDeduction',
		'deductions_longDistanceCall',
		'deductions_totalNetPayBeforeTax',
	),
)); ?>
<h1>Earnings</h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(               
            'label'=>'ID',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->earnings->id), array('earnings/view','id'=>$model->earnings->id)),
        ),
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		array(               
            'label'=>'Date',
            'type'=>'raw',
            'value'=>CHtml::encode($model->earnings->earnings_date),
        ),
		array(               
            'label'=>'Period Date Range',
            'type'=>'raw',
            'value'=>CHtml::encode($model->earnings->earnings_periodDateRange),
        ),
		array(               
            'label'=>'Total Working Hours',
            'type'=>'raw',
            'value'=>CHtml::encode($model->earnings->earnings_totalWorkingHours),
        ),
		array(               
            'label'=>'Total Gross',
            'type'=>'raw',
            'value'=>CHtml::encode($model->earnings->earnings_totalGross),
        ),
	),
)); ?>

<h1>Philhealth</h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(               
            'label'=>'ID',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->philhealth->id), array('philhealth/view','id'=>$model->philhealth->id)),
        ),
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		array(               
            'label'=>'Philhealth ID',
            'type'=>'raw',
            'value'=>CHtml::encode($model->philhealth->philhealth_no),
        ),
		array(               
            'label'=>'Date',
            'type'=>'raw',
            'value'=>CHtml::encode($model->philhealth->philhealth_date),
        ),
		array(               
            'label'=>'Period Date Range',
            'type'=>'raw',
            'value'=>CHtml::encode($model->philhealth->philhealth_periodOfDeduction),
        ),
		array(               
            'label'=>'Salary Bracket',
            'type'=>'raw',
            'value'=>CHtml::encode($model->philhealth->philhealth_salarybracket),
        ),
		array(               
            'label'=>'Philhealth Contribution',
            'type'=>'raw',
            'value'=>CHtml::encode($model->philhealth->philhealth_totalDeduction),
        ),
	),
)); ?>

<h1>Pagibig</h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(               
            'label'=>'ID',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->pagibig->id), array('pagibig/view','id'=>$model->pagibig->id)),
        ),
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		array(               
            'label'=>'Pagibig ID',
            'type'=>'raw',
            'value'=>CHtml::encode($model->pagibig->pagibig_no),
        ),
		array(               
            'label'=>'Date',
            'type'=>'raw',
            'value'=>CHtml::encode($model->pagibig->pagibig_date),
        ),
		array(               
            'label'=>'Period Date Range',
            'type'=>'raw',
            'value'=>CHtml::encode($model->pagibig->pagibig_periodDeduction),
        ),
		array(               
            'label'=>'Pagibig Contribution',
            'type'=>'raw',
            'value'=>CHtml::encode($model->pagibig->pagibig_totalMonthlyDeduction),
        ),
	),
)); ?>

<h1>SSS</h1>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(               
            'label'=>'ID',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->sss->id), array('sss/view','id'=>$model->sss->id)),
        ),
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		array(               
            'label'=>'SSS ID',
            'type'=>'raw',
            'value'=>CHtml::encode($model->sss->sss_no),
        ),
		array(               
            'label'=>'Date',
            'type'=>'raw',
            'value'=>CHtml::encode($model->sss->sss_date),
        ),
		array(               
            'label'=>'Period Date Range',
            'type'=>'raw',
            'value'=>CHtml::encode($model->sss->sss_periodOfDeduction),
        ),
		array(               
            'label'=>'Salary Bracket',
            'type'=>'raw',
            'value'=>CHtml::encode($model->sss->sss_salarybracket),
        ),
		array(               
            'label'=>'SSS Contribution',
            'type'=>'raw',
            'value'=>CHtml::encode($model->sss->sss_totalDeduction),
        ),
	),
)); ?>