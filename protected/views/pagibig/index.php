<?php
/* @var $this PagibigController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pag-ibig Records',
);

$this->menu=array(
	array('label'=>'Create Pag-ibig Record', 'url'=>array('create')),
	array('label'=>'Manage Pag-ibig Records', 'url'=>array('admin')),
);
?>

<h1>Pag-ibig Records</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
