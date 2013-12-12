<?php
/* @var $this SssController */
/* @var $model sss */

$this->breadcrumbs=array(
	'SSS Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List All SSS Records', 'url'=>array('index')),
	array('label'=>'Create SSS Record', 'url'=>array('create')),
	array('label'=>'Update SSS Record', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SSS Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SSS Records', 'url'=>array('admin')),
);
?>

<h1>View SSS Records #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		'monthly_salary',
		'sss_no',
		'sss_date',
		'sss_periodMonth',
		'sss_periodOfDeduction',
		'sss_periodYear',
		'sss_loanMonthlyDeduction',
		'sss_salarybracket',
		'sss_totalMonthlyContribution',
		'sss_totalDeduction',
	),
)); ?>
