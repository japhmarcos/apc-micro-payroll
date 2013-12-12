<?php
/* @var $this Withholding_tax_tableController */
/* @var $model withholding_tax_table */

$this->breadcrumbs=array(
	'Withholding Tax Table'=>array('index'),
	'Add',
);

$this->menu=array(
	array('label'=>'List Exemption Statuses', 'url'=>array('index')),
	array('label'=>'Manage Withholding Tax Table', 'url'=>array('admin')),
);
?>

<h1>Add Exemption Status</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>