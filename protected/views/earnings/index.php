<?php
/* @var $this EarningsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Earnings',
);

$this->menu=array(
	array('label'=>'Create Earnings Record', 'url'=>array('create')),
	array('label'=>'Manage Earnings', 'url'=>array('admin')),
);
?>

<h1>Earnings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
