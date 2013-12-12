<?php
/* @var $this DepartmentController */
/* @var $data department */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_name')); ?>:</b>
	<?php echo CHtml::encode($data->department_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_code')); ?>:</b>
	<?php echo CHtml::encode($data->department_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_address')); ?>:</b>
	<?php echo CHtml::encode($data->department_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_city')); ?>:</b>
	<?php echo CHtml::encode($data->department_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_zipCode')); ?>:</b>
	<?php echo CHtml::encode($data->department_zipCode); ?>
	<br />
	<br />


</div>