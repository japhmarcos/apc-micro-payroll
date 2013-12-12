<?php
/* @var $this PagibigController */
/* @var $model pagibig */
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
		<?php echo $form->label($model,'pagibig_no'); ?>
		<?php echo $form->textField($model,'pagibig_no',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagibig_date'); ?>
		<?php echo $form->textField($model,'pagibig_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagibig_periodMonth'); ?>
		<?php echo $form->textField($model,'pagibig_periodMonth',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagibig_periodDeduction'); ?>
		<?php echo $form->textField($model,'pagibig_periodDeduction',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagibig_periodYear'); ?>
		<?php echo $form->textField($model,'pagibig_periodYear',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagibig_monthlyContribution'); ?>
		<?php echo $form->textField($model,'pagibig_monthlyContribution',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagibig_loanMonthlyDeduction'); ?>
		<?php echo $form->textField($model,'pagibig_loanMonthlyDeduction',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pagibig_totalMonthlyDeduction'); ?>
		<?php echo $form->textField($model,'pagibig_totalMonthlyDeduction',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->