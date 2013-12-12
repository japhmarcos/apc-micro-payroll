<?php
/* @var $this ThirteenthmonthpayController */
/* @var $model thirteenthmonthpay */

$this->breadcrumbs=array(
	'Thirteenth Month Bonuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List All Thirteenth Month Bonuses', 'url'=>array('index')),
	array('label'=>'Manage Thirteenth Month Bonuses', 'url'=>array('admin')),
);
?>

<h1>Create Thirteenth Month Bonus</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>