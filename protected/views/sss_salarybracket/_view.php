<?php
/* @var $this Sss_salarybracketController */
/* @var $data sss_salarybracket */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('range_of_compensation')); ?>:</b>
	<?php echo CHtml::encode($data->range_of_compensation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_contribution')); ?>:</b>
	<?php echo CHtml::encode($data->employee_contribution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employer_contribution')); ?>:</b>
	<?php echo CHtml::encode($data->employer_contribution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_contribution')); ?>:</b>
	<?php echo CHtml::encode($data->total_contribution); ?>
	<br />


</div>