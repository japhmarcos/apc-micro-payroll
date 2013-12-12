<?php
/* @var $this Sss_salarybracketController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'SSS Salary Bracket',
);

$this->menu=array(
	array('label'=>'Add Range of Compensation', 'url'=>array('create')),
	array('label'=>'Manage Salary Bracket', 'url'=>array('admin')),
);
?>

<h1>SSS Salary Bracket</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
