<?php
/* @var $this Withholding_taxController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Withholding Tax Records',
);

$this->menu=array(
	array('label'=>'Create Withholding Tax Record', 'url'=>array('create')),
	array('label'=>'Manage Withholding Tax Records', 'url'=>array('admin')),
);
?>

<h1>Withholding Tax Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
