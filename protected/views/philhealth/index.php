<?php
/* @var $this PhilhealthController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Philhealth Records',
);

$this->menu=array(
	array('label'=>'Create Philhealth Record', 'url'=>array('create')),
	array('label'=>'Manage Philhealth Records', 'url'=>array('admin')),
);
?>

<h1>Philhealth Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
