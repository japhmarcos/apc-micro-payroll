<?php
/* @var $this PhilhealthController */
/* @var $data philhealth */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employee['FullName']), array('employee/view','id'=>$data->employee->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_no')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_salary')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_date')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_periodMonth')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_periodMonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_periodOfDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_periodOfDeduction); ?>
	<br />
	
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_totalDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_totalDeduction); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_salarybracket')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_salarybracket); ?>
	<br />
	<br/>	
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_periodYear')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_periodYear); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_totalDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth_totalDeduction); ?>
	<br />

	*/ ?>

</div>