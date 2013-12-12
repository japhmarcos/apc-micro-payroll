<?php
/* @var $this PhilhealthController */
/* @var $model philhealth */

$this->breadcrumbs=array(
	'Philhealth Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List All Philhealth Records', 'url'=>array('index')),
	array('label'=>'Create Philhealth Record', 'url'=>array('create')),
	array('label'=>'Update Philhealth Record', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Philhealth Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Philhealth Records', 'url'=>array('admin')),
);
?>

<h1>View Philhealth Record #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		'philhealth_no',
		'monthly_salary',
		'philhealth_date',
		'philhealth_periodMonth',
		'philhealth_periodOfDeduction',
		'philhealth_periodYear',
		'philhealth_salarybracket',
		'philhealth_totalDeduction',
	),
)); ?>
