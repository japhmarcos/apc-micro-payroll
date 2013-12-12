<?php
/* @var $this SssController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'SSS Records',
);

$this->menu=array(
	array('label'=>'Create SSS Record', 'url'=>array('create')),
	array('label'=>'Manage SSS Records', 'url'=>array('admin')),
);
?>

<h1>SSS Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
