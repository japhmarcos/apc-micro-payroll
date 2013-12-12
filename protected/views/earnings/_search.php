<?php
/* @var $this EarningsController */
/* @var $model earnings */
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
		<?php echo $form->label($model,'employee_id'); ?>
		<?php echo $form->textField($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_date'); ?>
		<?php echo $form->textField($model,'earnings_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_periodMonth'); ?>
		<?php echo $form->textField($model,'earnings_periodMonth',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_periodDateRange'); ?>
		<?php echo $form->textField($model,'earnings_periodDateRange',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_periodYear'); ?>
		<?php echo $form->textField($model,'earnings_periodYear',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_totalWorkingHours'); ?>
		<?php echo $form->textField($model,'earnings_totalWorkingHours'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_totalAllowancePerDay'); ?>
		<?php echo $form->textField($model,'earnings_totalAllowancePerDay',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_otherEarnings'); ?>
		<?php echo $form->textField($model,'earnings_otherEarnings',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_overtime'); ?>
		<?php echo $form->textField($model,'earnings_overtime',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_specialHoliday'); ?>
		<?php echo $form->textField($model,'earnings_specialHoliday',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_specialHolidayOnRestDay'); ?>
		<?php echo $form->textField($model,'earnings_specialHolidayOnRestDay',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_regularHoliday'); ?>
		<?php echo $form->textField($model,'earnings_regularHoliday',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_regularHolidayOnRestDay'); ?>
		<?php echo $form->textField($model,'earnings_regularHolidayOnRestDay',array('size'=>10,'maxlength'=>10)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'earnings_totalOvertimeOnHoliday'); ?>
		<?php echo $form->textField($model,'earnings_totalOvertimeOnHoliday',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_totalOvertimeOnRestDay'); ?>
		<?php echo $form->textField($model,'earnings_totalOvertimeOnRestDay',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'earnings_totalGross'); ?>
		<?php echo $form->textField($model,'earnings_totalGross',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->