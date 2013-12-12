<?php
/* @var $this Withholding_tax_tableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Withholding Tax Table',
);

$this->menu=array(
	array('label'=>'Add Exemption Status', 'url'=>array('create')),
	array('label'=>'Manage Withholding Tax Table', 'url'=>array('admin')),
);
?>

<h1>Withholding Tax Table</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
