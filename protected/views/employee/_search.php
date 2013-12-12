<?php
/* @var $this EmployeeController */
/* @var $model employee */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_lastName'); ?>
		<?php echo $form->textField($model,'employee_lastName',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_firstName'); ?>
		<?php echo $form->textField($model,'employee_firstName',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_middleName'); ?>
		<?php echo $form->textField($model,'employee_middleName',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_age'); ?>
		<?php echo $form->textField($model,'employee_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_homeAddress'); ?>
		<?php echo $form->textField($model,'employee_homeAddress',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_city'); ?>
		<?php echo $form->textField($model,'employee_city',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_zipCode'); ?>
		<?php echo $form->textField($model,'employee_zipCode',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_dateOfBirth'); ?>
		<?php echo $form->textField($model,'employee_dateOfBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_contactNo'); ?>
		<?php echo $form->textField($model,'employee_contactNo',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_civilStatus'); ?>
		<?php echo $form->textField($model,'employee_civilStatus',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_gender'); ?>
		<?php echo $form->textField($model,'employee_gender',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_dateHired'); ?>
		<?php echo $form->textField($model,'employee_dateHired'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_dateOfRegularization'); ?>
		<?php echo $form->textField($model,'employee_dateOfRegularization'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_philhealthNo'); ?>
		<?php echo $form->textField($model,'employee_philhealthNo',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_sssNo'); ?>
		<?php echo $form->textField($model,'employee_sssNo',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_pagIbigNo'); ?>
		<?php echo $form->textField($model,'employee_pagIbigNo',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_tinNo'); ?>
		<?php echo $form->textField($model,'employee_tinNo',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_exemptionStatus'); ?>
		<?php echo $form->textField($model,'employee_exemptionStatus',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_bankAccountNo'); ?>
		<?php echo $form->textField($model,'employee_bankAccountNo',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_minimumHoursOfWork'); ?>
		<?php echo $form->textField($model,'employee_minimumHoursOfWork',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_salaryPerHour'); ?>
		<?php echo $form->textField($model,'employee_salaryPerHour',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_daysPerWeek'); ?>
		<?php echo $form->textField($model,'employee_daysPerWeek'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_salaryPerDay'); ?>
		<?php echo $form->textField($model,'employee_salaryPerDay',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_monthlySalary'); ?>
		<?php echo $form->textField($model,'employee_monthlySalary',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->