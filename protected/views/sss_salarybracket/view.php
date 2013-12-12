<?php
/* @var $this Sss_salarybracketController */
/* @var $model sss_salarybracket */

$this->breadcrumbs=array(
	'SSS Salary Bracket'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Range of Compensations', 'url'=>array('index')),
	array('label'=>'Add Range of Compensation', 'url'=>array('create')),
	array('label'=>'Update Salary Bracket', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Range of Compensation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salary Bracket', 'url'=>array('admin')),
);
?>

<h1>View Range of Compensations #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'range_of_compensation',
		'employee_contribution',
		'employer_contribution',
		'total_contribution',
	),
)); ?>
