<?php
/* @var $this PhilhealthController */
/* @var $model philhealth */

$this->breadcrumbs=array(
	'Philhealth Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Philhealth Records', 'url'=>array('index')),
	array('label'=>'Manage Philhealth Records', 'url'=>array('admin')),
);
?>

<h1>Create Philhealth Record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>