<?php
/* @var $this SssController */
/* @var $model sss */

$this->breadcrumbs=array(
	'SSS Records'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List All SSS Records', 'url'=>array('index')),
	array('label'=>'Create SSS Record', 'url'=>array('create')),
	array('label'=>'View SSS Record', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SSS Records', 'url'=>array('admin')),
);
?>

<h1>Update SSS Record <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>