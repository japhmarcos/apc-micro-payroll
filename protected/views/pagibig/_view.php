<?php
/* @var $this PagibigController */
/* @var $data pagibig */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employee['FullName']), array('employee/view','id'=>$data->employee->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagibig_no')); ?>:</b>
	<?php echo CHtml::encode($data->pagibig_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagibig_date')); ?>:</b>
	<?php echo CHtml::encode($data->pagibig_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagibig_periodMonth')); ?>:</b>
	<?php echo CHtml::encode($data->pagibig_periodMonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagibig_periodDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->pagibig_periodDeduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagibig_periodYear')); ?>:</b>
	<?php echo CHtml::encode($data->pagibig_periodYear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagibig_totalMonthlyDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->pagibig_totalMonthlyDeduction); ?>
	<br />
	<br/>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pagibig_monthlyContribution')); ?>:</b>
	<?php echo CHtml::encode($data->pagibig_monthlyContribution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagibig_loanMonthlyDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->pagibig_loanMonthlyDeduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pagibig_totalMonthlyDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->pagibig_totalMonthlyDeduction); ?>
	<br />

	*/ ?>

</div>