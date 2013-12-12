<?php
/* @var $this ThirteenthmonthpayController */
/* @var $model thirteenthmonthpay */

$this->breadcrumbs=array(
	'Thirteenth Month Bonuses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List All Thirteenth Month Bonuses', 'url'=>array('index')),
	array('label'=>'Create Thirteenth Month Bonus', 'url'=>array('create')),
	array('label'=>'Update Thirteenth Month Bonus', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Thirteenth Month Bonus', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Thirteenth Month Bonuses', 'url'=>array('admin')),
);
?>

<h1>View Thirteenth Month Bonus #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(               
            'label'=>'Employee',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->employee['FullName']), array('employee/view','id'=>$model->employee->id)),
        ),
		'thirteenthMonthPay_date',
		'thirteenthMonthPay_dateOfRegularization',
		'thirteenthMonthPay_totalBonus',
		
	),
)); ?>
