<?php
/* @var $this SssController */
/* @var $model sss */

$this->breadcrumbs=array(
	'SSS Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All SSS Records', 'url'=>array('index')),
	array('label'=>'Manage SSS Records', 'url'=>array('admin')),
);
?>

<h1>Create SSS Record</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>