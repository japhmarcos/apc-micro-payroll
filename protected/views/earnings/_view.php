<?php
/* @var $this EarningsController */
/* @var $data earnings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employee['FullName']), array('employee/view','id'=>$data->employee->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_date')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_periodMonth')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_periodMonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_periodDateRange')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_periodDateRange); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_periodYear')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_periodYear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_totalWorkingHours')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_totalWorkingHours); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_totalGross')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_totalGross); ?>
	<br />
	<br/>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_totalAllowancePerDay')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_totalAllowancePerDay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_otherEarnings')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_otherEarnings); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_overtime')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_overtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_specialHoliday')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_specialHoliday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_specialHolidayOnRestDay')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_specialHolidayOnRestDay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_regularHoliday')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_regularHoliday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_regularHolidayOnRestDay')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_regularHolidayOnRestDay); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_totalOvertimeOnHoliday')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_totalOvertimeOnHoliday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_totalOvertimeOnRestDay')); ?>:</b>
	<?php echo CHtml::encode($data->earnings_totalOvertimeOnRestDay); ?>
	<br />

	*/ ?>

</div>