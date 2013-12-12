<?php
/* @var $this EarningsController */
/* @var $model earnings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'earnings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(
		employee::model()->findAll(), 'id', 'FullName'),
		array(
		'prompt' => 'Select Employee',
		)); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_date'); ?>
		
	<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'earnings_date','model'=>$model, 'options'=>array(
			'yearRange'=>'1950:2013',
			'defaultDate'=>'-0y',
			'changeMonth'=>true,
			'changeYear'=>true,
			'buttonText'=>'Select',
			'dateFormat'=>'yy-mm-dd',
			'value'=>(!empty($model->earnings_date))?(is_numeric($model->earnings_date))?date('yy-mm-dd',$model->earnings_date):$model->earnings_date:date('Y-mm-dd')
			),'htmlOptions'=>array(
			'style'=>'width:80px;vertical-align:top'
			),
			));?>
		<?php echo $form->error($model,'earnings_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_periodMonth'); ?>
		<?php
                $earnings_periodMonth= array('prompt'=>'Select Month','January'=>'January', 'February'=>'February', 'March'=>'March','April'=>'April'
				,'May'=>'May','June'=>'June','July'=>'July','August'=>'August','September'=>'September','October'=>'October','November'=>'November','December'=>'December');
                echo $form->dropDownList($model,'earnings_periodMonth',$earnings_periodMonth); ?>
		<?php echo $form->error($model,'earnings_periodMonth'); ?>
		<?php echo $form->error($model,'earnings_periodMonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_periodDateRange'); ?>
		<?php
                $earnings_periodDateRange = array('prompt'=>'Select Date Range','1-15'=>'1-15', '16-30/31'=>'16-30/31');
                echo $form->dropDownList($model,'earnings_periodDateRange',$earnings_periodDateRange); ?>
		<?php echo $form->error($model,'earnings_periodDateRange'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_periodYear'); ?>
		<?php $periodYear= Range(2000,2025);
                echo $form->dropDownList($model,'earnings_periodYear',$periodYear); ?>
		<?php echo $form->error($model,'earnings_periodYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_totalAllowancePerDay'); ?>
		<?php echo $form->textField($model,'earnings_totalAllowancePerDay',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'earnings_totalAllowancePerDay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_totalWorkingHours'); ?>
		<?php echo $form->textField($model,'earnings_totalWorkingHours'); ?>
		<?php echo $form->error($model,'earnings_totalWorkingHours'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_overtime'); ?>
		<?php echo $form->textField($model,'earnings_overtime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'earnings_overtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_specialHoliday'); ?>
		<?php echo $form->textField($model,'earnings_specialHoliday',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'earnings_specialHoliday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_specialHolidayOnRestDay'); ?>
		<?php echo $form->textField($model,'earnings_specialHolidayOnRestDay',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'earnings_specialHolidayOnRestDay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_regularHoliday'); ?>
		<?php echo $form->textField($model,'earnings_regularHoliday',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'earnings_regularHoliday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings_regularHolidayOnRestDay'); ?>
		<?php echo $form->textField($model,'earnings_regularHolidayOnRestDay',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'earnings_regularHolidayOnRestDay'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'earnings_totalOvertimeOnHoliday'); ?>
		<?php echo $form->textField($model,'earnings_totalOvertimeOnHoliday',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'earnings_totalOvertimeOnHoliday'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'earnings_totalOvertimeOnRestDay'); ?>
		<?php echo $form->textField($model,'earnings_totalOvertimeOnRestDay',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'earnings_totalOvertimeOnRestDay'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'earnings_otherEarnings'); ?>
		<?php echo $form->textField($model,'earnings_otherEarnings',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'earnings_otherEarnings'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->