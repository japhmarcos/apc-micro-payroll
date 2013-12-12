<?php
/* @var $this PayrollController */
/* @var $data payroll */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employee['FullName']), array('employee/view','id'=>$data->employee->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payroll_date')); ?>:</b>
	<?php echo CHtml::encode($data->payroll_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payroll_month')); ?>:</b>
	<?php echo CHtml::encode($data->payroll_month); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payroll_dateRange')); ?>:</b>
	<?php echo CHtml::encode($data->payroll_dateRange); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payroll_year')); ?>:</b>
	<?php echo CHtml::encode($data->payroll_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payroll_totalNetPayBeforeTax')); ?>:</b>
	<?php echo CHtml::encode($data->payroll_totalNetPayBeforeTax); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('payroll_withholdingTax')); ?>:</b>
	<?php echo CHtml::encode($data->payroll_withholdingTax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('payroll_totalNetPayAfterTax')); ?>:</b>
	<?php echo CHtml::encode($data->payroll_totalNetPayAfterTax); ?>
	<br />
	<br/>


</div>