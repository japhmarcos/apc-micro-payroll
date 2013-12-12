<?php
/* @var $this Withholding_taxController */
/* @var $model withholding_tax */

$this->breadcrumbs=array(
	'Withholding Tax Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Withholding Tax Records', 'url'=>array('index')),
	array('label'=>'Create Withholding Tax Record', 'url'=>array('create')),
	array('label'=>'Update Withholding Tax Records', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Withholding Tax Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Withholding Tax Records', 'url'=>array('admin')),
);
?>

<h1>View Withholding Tax Record #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		'tin_number',
		'withholdingtax_exemption_status',
		'withholdingtax_date',
		'withholdingtax_periodMonth',
		'withholdingtax_periodOfDeduction',
		'withholdingtax_periodYear',
		'taxable_income',
		'withholdingtax_salaryBase',
		'withholdingtax_baseTax',
		'withholdingtax_percentageExcess',
		'withholdingtax_exemption',
		'total_withholdingTax',
	),
)); ?>
