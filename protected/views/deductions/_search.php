<?php
/* @var $this DeductionsController */
/* @var $model deductions */
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
		<?php echo $form->label($model,'earnings_id'); ?>
		<?php echo $form->textField($model,'earnings_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_id'); ?>
		<?php echo $form->textField($model,'philhealth_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sss_id'); ?>
		<?php echo $form->textField($model,'sss_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagibig_id'); ?>
		<?php echo $form->textField($model,'pagibig_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deductions_date'); ?>
		<?php echo $form->textField($model,'deductions_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deductions_periodMonth'); ?>
		<?php echo $form->textField($model,'deductions_periodMonth',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deductions_periodDateRange'); ?>
		<?php echo $form->textField($model,'deductions_periodDateRange',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deductions_periodYear'); ?>
		<?php echo $form->textField($model,'deductions_periodYear',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deductions_otherDeduction'); ?>
		<?php echo $form->textField($model,'deductions_otherDeduction',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deductions_longDistanceCall'); ?>
		<?php echo $form->textField($model,'deductions_longDistanceCall',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deductions_totalNetPayBeforeTax'); ?>
		<?php echo $form->textField($model,'deductions_totalNetPayBeforeTax',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->