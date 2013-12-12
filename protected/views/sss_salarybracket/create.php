<?php
/* @var $this Sss_salarybracketController */
/* @var $model sss_salarybracket */

$this->breadcrumbs=array(
	'SSS Salary Bracket'=>array('index'),
	'Add',
);

$this->menu=array(
	array('label'=>'List Range of Compensations', 'url'=>array('index')),
	array('label'=>'Manage Salary Bracket', 'url'=>array('admin')),
);
?>

<h1>Add Range of Compensation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>