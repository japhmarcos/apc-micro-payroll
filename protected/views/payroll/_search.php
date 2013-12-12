<?php
/* @var $this PayrollController */
/* @var $model payroll */
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
		<?php echo $form->label($model,'payroll_date'); ?>
		<?php echo $form->textField($model,'payroll_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payroll_month'); ?>
		<?php echo $form->textField($model,'payroll_month',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payroll_dateRange'); ?>
		<?php echo $form->textField($model,'payroll_dateRange',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payroll_year'); ?>
		<?php echo $form->textField($model,'payroll_year',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payroll_totalNetPayBeforeTax'); ?>
		<?php echo $form->textField($model,'payroll_totalNetPayBeforeTax',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payroll_withholdingTax'); ?>
		<?php echo $form->textField($model,'payroll_withholdingTax',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payroll_totalNetPayAfterTax'); ?>
		<?php echo $form->textField($model,'payroll_totalNetPayAfterTax',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->