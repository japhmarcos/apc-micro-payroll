<?php
/* @var $this PagibigController */
/* @var $model pagibig */

$this->breadcrumbs=array(
	'Pag-ibig Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Pag-ibig Records', 'url'=>array('index')),
	array('label'=>'Manage Pag-ibig Records', 'url'=>array('admin')),
);
?>

<h1>Create Pag-ibig Record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>