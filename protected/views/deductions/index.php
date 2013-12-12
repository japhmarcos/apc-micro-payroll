<?php
/* @var $this DeductionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salary Deductions',
);

$this->menu=array(
	array('label'=>'Create Salary Deduction', 'url'=>array('create')),
	array('label'=>'Manage Salary Deductions', 'url'=>array('admin')),
);
?>

<h1>Salary Deductions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
