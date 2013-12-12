<?php
/* @var $this Withholding_tax_tableController */
/* @var $model withholding_tax_table */

$this->breadcrumbs=array(
	'Withholding Tax Table'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Exemption Statuses', 'url'=>array('index')),
	array('label'=>'Add Exemption Status', 'url'=>array('create')),
	array('label'=>'Update Exemption Status', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Exemption Status', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Withholding Tax Table', 'url'=>array('admin')),
);
?>

<h1>View Exemption Status #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'exemption_status',
		'exemption_value',
		'salary_base',
		'percentage_excess',
		'base_tax',
	),
)); ?>
