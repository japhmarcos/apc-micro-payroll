<?php
/* @var $this PhilhealthsalarybracketController */
/* @var $model philhealthsalarybracket */

$this->breadcrumbs=array(
	'Philhealth Salary Bracket'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salary Ranges', 'url'=>array('index')),
	array('label'=>'Add Salary Range', 'url'=>array('create')),
	array('label'=>'View Salary Bracket', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Salary Bracket', 'url'=>array('admin')),
);
?>

<h1>Update Salary Ranges <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>