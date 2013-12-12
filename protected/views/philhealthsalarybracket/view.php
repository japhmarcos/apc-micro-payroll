<?php
/* @var $this PhilhealthsalarybracketController */
/* @var $model philhealthsalarybracket */

$this->breadcrumbs=array(
	'Philhealth Salary Bracket'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Salary Ranges', 'url'=>array('index')),
	array('label'=>'Add Salary Range', 'url'=>array('create')),
	array('label'=>'Update Salary Bracket', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Salary Range', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salary Bracket', 'url'=>array('admin')),
);
?>

<h1>View Salary Ranges #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'salary_range',
		'employee_share',
		'employer_share',
		'total_monthly_premium',
	),
)); ?>
