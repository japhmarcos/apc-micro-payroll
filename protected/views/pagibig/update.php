<?php
/* @var $this PagibigController */
/* @var $model pagibig */

$this->breadcrumbs=array(
	'Pag-ibig Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Pag-ibig Records', 'url'=>array('index')),
	array('label'=>'Create Pag-ibig Record', 'url'=>array('create')),
	array('label'=>'View Pag-ibig Record', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pag-ibig Records', 'url'=>array('admin')),
);
?>

<h1>Update Pag-ibig Record <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>