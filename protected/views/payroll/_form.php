<?php
/* @var $this PayrollController */
/* @var $model payroll */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payroll-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(
		employee::model()->findAll(), 'id', 'FullName'),
		array(
		'prompt' => 'Select Employee'
		)); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payroll_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'payroll_date','model'=>$model, 'options'=>array(
			'yearRange'=>'1950:2013',
			'defaultDate'=>'-0y',
			'changeMonth'=>true,
			'changeYear'=>true,
			'buttonText'=>'Select',
			'dateFormat'=>'yy-mm-dd',
			'value'=>(!empty($model->payroll_date))?(is_numeric($model->payroll_date))?date('yy-mm-dd',$model->payroll_date):$model->payroll_date:date('Y-mm-dd')
			),'htmlOptions'=>array(
			'style'=>'width:80px;vertical-align:top'
			),
			));?>
		<?php echo $form->error($model,'payroll_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payroll_month'); ?>
		<?php
                $payroll_month= array('prompt'=>'Select Month','January'=>'January', 'February'=>'February', 'March'=>'March','April'=>'April'
				,'May'=>'May','June'=>'June','July'=>'July','August'=>'August','September'=>'September','October'=>'October','November'=>'November','December'=>'December');
                echo $form->dropDownList($model,'payroll_month',$payroll_month); ?>
		<?php echo $form->error($model,'payroll_month'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payroll_dateRange'); ?>
		<?php
                $payroll_dateRange = array('prompt'=>'Select Date Range','1-15'=>'1-15', '16-30/31'=>'16-30/31');
                echo $form->dropDownList($model,'payroll_dateRange',$payroll_dateRange); ?>
		<?php echo $form->error($model,'payroll_dateRange'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payroll_year'); ?>
		<?php $payroll_year= Range(2000,2025);
                echo $form->dropDownList($model,'payroll_year',$payroll_year); ?>
		<?php echo $form->error($model,'payroll_year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payroll_totalNetPayBeforeTax'); ?>
		<?php echo $form->dropDownList($model,'payroll_totalNetPayBeforeTax',
		CHtml::listData(deductions::model()->findAll(),'deductions_totalNetPayBeforeTax','DeductionInfo','EmployeeFullName'),
		array(
		'prompt' => 'Select Taxable Income',)); ?>
		<?php echo $form->error($model,'payroll_totalNetPayBeforeTax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payroll_withholdingTax'); ?>
		<?php echo $form->dropDownList($model,'payroll_withholdingTax',
		CHtml::listData(withholding_tax::model()->findAll(),'total_withholdingTax','TaxInfo','EmployeeFullName'),
		array(
		'prompt' => 'Select Withholding Tax',)); ?>
		<?php echo $form->error($model,'payroll_withholdingTax'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->