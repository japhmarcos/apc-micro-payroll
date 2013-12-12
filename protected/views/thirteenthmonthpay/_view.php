<?php
/* @var $this ThirteenthmonthpayController */
/* @var $data thirteenthmonthpay */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thirteenthMonthPay_date')); ?>:</b>
	<?php echo CHtml::encode($data->thirteenthMonthPay_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thirteenthMonthPay_dateOfRegularization')); ?>:</b>
	<?php echo CHtml::encode($data->thirteenthMonthPay_dateOfRegularization); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thirteenthMonthPay_totalBonus')); ?>:</b>
	<?php echo CHtml::encode($data->thirteenthMonthPay_totalBonus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::encode($data->employee_id); ?>
	<br />
	<br/>


</div>