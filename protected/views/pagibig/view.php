<?php
/* @var $this PagibigController */
/* @var $model pagibig */

$this->breadcrumbs=array(
	'Pag-ibig Records'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List All Pag-ibig Records', 'url'=>array('index')),
	array('label'=>'Create Pag-ibig Record', 'url'=>array('create')),
	array('label'=>'Update Pag-ibig Record', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Pag-ibig Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pag-ibig Records', 'url'=>array('admin')),
);
?>

<h1>View Pag-ibig Record #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		'pagibig_no',
		'pagibig_date',
		'pagibig_periodMonth',
		'pagibig_periodDeduction',
		'pagibig_periodYear',
		'pagibig_monthlyContribution',
		'pagibig_loanMonthlyDeduction',
		'pagibig_totalMonthlyDeduction',
	),
)); ?>
