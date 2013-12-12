<?php
/* @var $this PhilhealthsalarybracketController */
/* @var $model philhealthsalarybracket */

$this->breadcrumbs=array(
	'Philhealth Salary Bracket'=>array('index'),
	'Add',
);

$this->menu=array(
	array('label'=>'List Salary Ranges', 'url'=>array('index')),
	array('label'=>'Manage Salary Bracket', 'url'=>array('admin')),
);
?>

<h1>Add Salary Range</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>