<?php
/* @var $this Sss_salarybracketController */
/* @var $model sss_salarybracket */

$this->breadcrumbs=array(
	'SSS Salary Bracket'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Range of Compensations', 'url'=>array('index')),
	array('label'=>'Add Range of Compensation', 'url'=>array('create')),
	array('label'=>'View Range of Compensations', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Salary Bracket', 'url'=>array('admin')),
);
?>

<h1>Update Salary Bracket <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>