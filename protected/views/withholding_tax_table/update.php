<?php
/* @var $this Withholding_tax_tableController */
/* @var $model withholding_tax_table */

$this->breadcrumbs=array(
	'Withholding Tax Table'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Exemption Statuses', 'url'=>array('index')),
	array('label'=>'Add Exemption Status', 'url'=>array('create')),
	array('label'=>'View Exemption Statuses', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Withholding Tax Table', 'url'=>array('admin')),
);
?>

<h1>Update Exemption Status <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>