<?php
/* @var $this PhilhealthController */
/* @var $model philhealth */

$this->breadcrumbs=array(
	'Philhealth Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Philhealth Records', 'url'=>array('index')),
	array('label'=>'Create Philhealth Record', 'url'=>array('create')),
	array('label'=>'View Philhealth Record', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Philhealth Records', 'url'=>array('admin')),
);
?>

<h1>Update Philhealth Record <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>