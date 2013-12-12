<?php
/* @var $this ThirteenthmonthpayController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Thirteenth Month Bonuses',
);

$this->menu=array(
	array('label'=>'Create Thirteenth Month Bonus', 'url'=>array('create')),
	array('label'=>'Manage Thirteenth Month Bonuses', 'url'=>array('admin')),
);
?>

<h1>Thirteenth Month Bonuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
