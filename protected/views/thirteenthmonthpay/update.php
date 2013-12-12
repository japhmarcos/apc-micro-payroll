<?php
/* @var $this ThirteenthmonthpayController */
/* @var $model thirteenthmonthpay */

$this->breadcrumbs=array(
	'Thirteenth Month Bonuses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List All Thirteenth Month Bonuses', 'url'=>array('index')),
	array('label'=>'Create Thirteenth Month Bonus', 'url'=>array('create')),
	array('label'=>'View Thirteenth Month Bonus', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Thirteenth Month Bonuses', 'url'=>array('admin')),
);
?>

<h1>Update Thirteenth Month Bonuses <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>