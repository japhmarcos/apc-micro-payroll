<?php
/* @var $this PhilhealthsalarybracketController */
/* @var $data philhealthsalarybracket */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_range')); ?>:</b>
	<?php echo CHtml::encode($data->salary_range); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_share')); ?>:</b>
	<?php echo CHtml::encode($data->employee_share); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer_share')); ?>:</b>
	<?php echo CHtml::encode($data->employer_share); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_monthly_premium')); ?>:</b>
	<?php echo CHtml::encode($data->total_monthly_premium); ?>
	<br />


</div>