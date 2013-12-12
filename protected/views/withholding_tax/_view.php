<?php
/* @var $this Withholding_taxController */
/* @var $data withholding_tax */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->employee['FullName']), array('employee/view','id'=>$data->employee->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tin_number')); ?>:</b>
	<?php echo CHtml::encode($data->tin_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('withholdingtax_exemption_status')); ?>:</b>
	<?php echo CHtml::encode($data->withholdingtax_exemption_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('withholdingtax_date')); ?>:</b>
	<?php echo CHtml::encode($data->withholdingtax_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('withholdingtax_periodMonth')); ?>:</b>
	<?php echo CHtml::encode($data->withholdingtax_periodMonth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('withholdingtax_periodOfDeduction')); ?>:</b>
	<?php echo CHtml::encode($data->withholdingtax_periodOfDeduction); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('withholdingtax_exemption')); ?>:</b>
	<?php echo CHtml::encode($data->withholdingtax_exemption); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_withholdingTax')); ?>:</b>
	<?php echo CHtml::encode($data->total_withholdingTax); ?>
	<br />
	<br/>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('withholdingtax_periodYear')); ?>:</b>
	<?php echo CHtml::encode($data->withholdingtax_periodYear); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxable_income')); ?>:</b>
	<?php echo CHtml::encode($data->taxable_income); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('withholdingtax_salaryBase')); ?>:</b>
	<?php echo CHtml::encode($data->withholdingtax_salaryBase); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('withholdingtax_baseTax')); ?>:</b>
	<?php echo CHtml::encode($data->withholdingtax_baseTax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('withholdingtax_percentageExcess')); ?>:</b>
	<?php echo CHtml::encode($data->withholdingtax_percentageExcess); ?>
	<br />


	*/ ?>

</div>