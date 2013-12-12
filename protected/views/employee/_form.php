<?php
/* @var $this EmployeeController */
/* @var $model employee */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'employee-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'department_id'); ?>
		<?php echo $form->dropDownList($model, 'department_id', CHtml::listData(
		department::model()->findAll(), 'id', 'department_name'),
		array('prompt' => 'Select Department')); ?>
		<?php echo $form->error($model,'department_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_lastName'); ?>
		<?php echo $form->textField($model,'employee_lastName',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'employee_lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_firstName'); ?>
		<?php echo $form->textField($model,'employee_firstName',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'employee_firstName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_middleName'); ?>
		<?php echo $form->textField($model,'employee_middleName',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'employee_middleName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_age'); ?>
		<?php echo $form->textField($model,'employee_age'); ?>
		<?php echo $form->error($model,'employee_age'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_homeAddress'); ?>
		<?php echo $form->textField($model,'employee_homeAddress',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'employee_homeAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_city'); ?>
		<?php echo $form->textField($model,'employee_city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'employee_city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_zipCode'); ?>
		<?php echo $form->textField($model,'employee_zipCode',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'employee_zipCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_dateOfBirth'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'employee_dateOfBirth','model'=>$model, 'options'=>array(
			'yearRange'=>'1950:2013',
			'defaultDate'=>'-0y',
			'changeMonth'=>true,
			'changeYear'=>true,
			'buttonText'=>'Select',
			'dateFormat'=>'yy-mm-dd',
			'value'=>(!empty($model->employee_dateOfBirth))?(is_numeric($model->employee_dateOfBirth))?date('yy-mm-dd',$model->employee_dateOfBirth):$model->employee_dateOfBirth:date('Y-mm-dd')
			),'htmlOptions'=>array(
			'style'=>'width:80px;vertical-align:top'
			),
			));?>
		<?php echo $form->error($model,'employee_dateOfBirth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_contactNo'); ?>
		<?php echo $form->textField($model,'employee_contactNo',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'employee_contactNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_civilStatus'); ?>
		<?php $employee_civilStatus = array('prompt'=>'Select Status','Single'=>'Single', 'Married'=>'Married', 'Widowed'=>'Widowed');
        echo $form->dropDownList($model,'employee_civilStatus',$employee_civilStatus); ?>
		<?php echo $form->error($model,'employee_civilStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_gender'); ?>
		<?php $employee_gender = array('Male'=>'Male', 'Female'=>'Female');
        echo $form->radioButtonList($model,'employee_gender',$employee_gender,array('separator'=>'  ')); ?>
		<?php echo $form->error($model,'employee_gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_dateHired'); ?>
				<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'employee_dateHired','model'=>$model, 'options'=>array(
			'yearRange'=>'1950:2013',
			'defaultDate'=>'-0y',
			'changeMonth'=>true,
			'changeYear'=>true,
			'buttonText'=>'Select',
			'dateFormat'=>'yy-mm-dd',
			'value'=>(!empty($model->employee_dateHired))?(is_numeric($model->employee_dateHired))?date('yy-mm-dd',$model->employee_dateHired):$model->employee_dateHired:date('Y-mm-dd')
			),'htmlOptions'=>array(
			'style'=>'width:80px;vertical-align:top'
			),
			));?>
		<?php echo $form->error($model,'employee_dateHired'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_dateOfRegularization'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'employee_dateOfRegularization','model'=>$model, 'options'=>array(
			'yearRange'=>'1950:2013',
			'defaultDate'=>'-0y',
			'changeMonth'=>true,
			'changeYear'=>true,
			'buttonText'=>'select',
			'dateFormat'=>'yy-mm-dd',
			'value'=>(!empty($model->employee_dateOfRegularization))?(is_numeric($model->employee_dateOfRegularization))?date('yy-mm-dd',$model->employee_dateOfRegularization):$model->employee_dateOfRegularization:date('Y-mm-dd')
			),'htmlOptions'=>array(
			'style'=>'width:80px;vertical-align:top'
			),
			));?>
		<?php echo $form->error($model,'employee_dateOfRegularization'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_philhealthNo'); ?>
		<?php echo $form->textField($model,'employee_philhealthNo',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'employee_philhealthNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_sssNo'); ?>
		<?php echo $form->textField($model,'employee_sssNo',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'employee_sssNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_pagIbigNo'); ?>
		<?php echo $form->textField($model,'employee_pagIbigNo',array('size'=>14,'maxlength'=>14)); ?>
		<?php echo $form->error($model,'employee_pagIbigNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_tinNo'); ?>
		<?php echo $form->textField($model,'employee_tinNo',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'employee_tinNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_exemptionStatus'); ?>
		<?php $employee_exemptionStatus = array('prompt'=>'Select Exemption Status','Single'=>'Single', 'Married with one child'=>'Married with one child', 'Married with two children'=>'Married with two children'
		, 'Married with three children'=>'Married with three children', 'Married with four children'=>'Married with four children');
        echo $form->dropDownList($model,'employee_exemptionStatus',$employee_exemptionStatus); ?>
		<?php echo $form->error($model,'employee_exemptionStatus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_bankAccountNo'); ?>
		<?php echo $form->textField($model,'employee_bankAccountNo',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'employee_bankAccountNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_minimumHoursOfWork'); ?>
		<?php echo $form->textField($model,'employee_minimumHoursOfWork',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'employee_minimumHoursOfWork'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_salaryPerHour'); ?>
		<?php echo $form->textField($model,'employee_salaryPerHour',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'employee_salaryPerHour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_daysPerWeek'); ?>
		<?php echo $form->textField($model,'employee_daysPerWeek'); ?>
		<?php echo $form->error($model,'employee_daysPerWeek'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->