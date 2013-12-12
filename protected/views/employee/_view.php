<?php
/* @var $this EmployeeController */
/* @var $data employee */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_id')); ?>:</b>
	
	<?php echo CHtml::link(CHtml::encode($data->department['department_name']), array('department/view','id'=>$data->department->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_lastName')); ?>:</b>
	<?php echo CHtml::encode($data->employee_lastName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_firstName')); ?>:</b>
	<?php echo CHtml::encode($data->employee_firstName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_middleName')); ?>:</b>
	<?php echo CHtml::encode($data->employee_middleName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_age')); ?>:</b>
	<?php echo CHtml::encode($data->employee_age); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_homeAddress')); ?>:</b>
	<?php echo CHtml::encode($data->employee_homeAddress); ?>
	<br />
	<br/>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_city')); ?>:</b>
	<?php echo CHtml::encode($data->employee_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_zipCode')); ?>:</b>
	<?php echo CHtml::encode($data->employee_zipCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_dateOfBirth')); ?>:</b>
	<?php echo CHtml::encode($data->employee_dateOfBirth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_contactNo')); ?>:</b>
	<?php echo CHtml::encode($data->employee_contactNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_civilStatus')); ?>:</b>
	<?php echo CHtml::encode($data->employee_civilStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_gender')); ?>:</b>
	<?php echo CHtml::encode($data->employee_gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_dateHired')); ?>:</b>
	<?php echo CHtml::encode($data->employee_dateHired); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_dateOfRegularization')); ?>:</b>
	<?php echo CHtml::encode($data->employee_dateOfRegularization); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_philhealthNo')); ?>:</b>
	<?php echo CHtml::encode($data->employee_philhealthNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_sssNo')); ?>:</b>
	<?php echo CHtml::encode($data->employee_sssNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_pagIbigNo')); ?>:</b>
	<?php echo CHtml::encode($data->employee_pagIbigNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_tinNo')); ?>:</b>
	<?php echo CHtml::encode($data->employee_tinNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_exemptionStatus')); ?>:</b>
	<?php echo CHtml::encode($data->employee_exemptionStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_bankAccountNo')); ?>:</b>
	<?php echo CHtml::encode($data->employee_bankAccountNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_minimumHoursOfWork')); ?>:</b>
	<?php echo CHtml::encode($data->employee_minimumHoursOfWork); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_salaryPerHour')); ?>:</b>
	<?php echo CHtml::encode($data->employee_salaryPerHour); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_daysPerWeek')); ?>:</b>
	<?php echo CHtml::encode($data->employee_daysPerWeek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_salaryPerDay')); ?>:</b>
	<?php echo CHtml::encode($data->employee_salaryPerDay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_monthlySalary')); ?>:</b>
	<?php echo CHtml::encode($data->employee_monthlySalary); ?>
	<br />

	*/ ?>

</div>