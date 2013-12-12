<?php
/* @var $this DeductionsController */
/* @var $data deductions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employee['FullName']), array('employee/view','id'=>$data->employee->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('earnings_id')); ?>:</b>
	<?php echo CHtml::encode($data->earnings->earnings_totalGross); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('philhealth_id')); ?>:</b>
	<?php echo CHtml::encode($data->philhealth->philhealth_totalDeduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_id')); ?>:</b>
	<?php echo CHtml::encode($data->sss->sss_totalDeduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagibig_id')); ?>:</b>
	<?php echo CHtml::encode($data->pagibig->pagibig_totalMonthlyDeduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deductions_date')); ?>:</b>
	<?php echo CHtml::encode($data->deductions_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deductions_totalNetPayBeforeTax')); ?>:</b>
	<?php echo CHtml::encode($data->deductions_totalNetPayBeforeTax); ?>
	<br />
	<br/>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('deductions_periodMonth')); ?>:</b>
	<?php echo CHtml::encode($data->deductions_periodMonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deductions_periodDateRange')); ?>:</b>
	<?php echo CHtml::encode($data->deductions_periodDateRange); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deductions_periodYear')); ?>:</b>
	<?php echo CHtml::encode($data->deductions_periodYear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deductions_otherDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->deductions_otherDeduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deductions_longDistanceCall')); ?>:</b>
	<?php echo CHtml::encode($data->deductions_longDistanceCall); ?>
	<br />

	*/ ?>

</div>