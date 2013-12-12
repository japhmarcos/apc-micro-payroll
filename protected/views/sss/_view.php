<?php
/* @var $this SssController */
/* @var $data sss */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employee['FullName']), array('employee/view','id'=>$data->employee->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monthly_salary')); ?>:</b>
	<?php echo CHtml::encode($data->monthly_salary); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_no')); ?>:</b>
	<?php echo CHtml::encode($data->sss_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_date')); ?>:</b>
	<?php echo CHtml::encode($data->sss_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_periodMonth')); ?>:</b>
	<?php echo CHtml::encode($data->sss_periodMonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_periodOfDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->sss_periodOfDeduction); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_salarybracket')); ?>:</b>
	<?php echo CHtml::encode($data->sss_salarybracket); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_totalDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->sss_totalDeduction); ?>
	<br />
	<br/>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_periodYear')); ?>:</b>
	<?php echo CHtml::encode($data->sss_periodYear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_loanMonthlyDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->sss_loanMonthlyDeduction); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_totalMonthlyContribution')); ?>:</b>
	<?php echo CHtml::encode($data->sss_totalMonthlyContribution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sss_totalDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->sss_totalDeduction); ?>
	<br />

	*/ ?>

</div>