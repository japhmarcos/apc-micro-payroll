<?php
/* @var $this EarningsController */
/* @var $model earnings */

$this->breadcrumbs=array(
	'Earnings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Earnings', 'url'=>array('index')),
	array('label'=>'Create Earnings Record', 'url'=>array('create')),
	array('label'=>'View Earnings', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Earnings', 'url'=>array('admin')),
);
?>

<h1>Update Earnings <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>