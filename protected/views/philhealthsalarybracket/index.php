<?php
/* @var $this PhilhealthsalarybracketController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Philhealth Salary Bracket',
);

$this->menu=array(
	array('label'=>'Add Salary Range', 'url'=>array('create')),
	array('label'=>'Manage Salary Bracket', 'url'=>array('admin')),
);
?>

<h1>Philhealth Salary Bracket</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
