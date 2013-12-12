<?php
/* @var $this Withholding_tax_tableController */
/* @var $data withholding_tax_table */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exemption_status')); ?>:</b>
	<?php echo CHtml::encode($data->exemption_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('exemption_value')); ?>:</b>
	<?php echo CHtml::encode($data->exemption_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salary_base')); ?>:</b>
	<?php echo CHtml::encode($data->salary_base); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('percentage_excess')); ?>:</b>
	<?php echo CHtml::encode($data->percentage_excess); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('base_tax')); ?>:</b>
	<?php echo CHtml::encode($data->base_tax); ?>
	<br />


</div>