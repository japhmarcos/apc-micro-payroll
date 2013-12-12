<?php
/* @var $this EarningsController */
/* @var $model earnings */

$this->breadcrumbs=array(
	'Earnings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Earnings', 'url'=>array('index')),
	array('label'=>'Manage Earnings', 'url'=>array('admin')),
);
?>

<h1>Create Earnings Record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>