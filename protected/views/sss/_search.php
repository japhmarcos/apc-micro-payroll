<?php
/* @var $this SssController */
/* @var $model sss */
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
		<?php echo $form->label($model,'monthly_salary'); ?>
		<?php echo $form->textField($model,'monthly_salary',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sss_no'); ?>
		<?php echo $form->textField($model,'sss_no',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sss_date'); ?>
		<?php echo $form->textField($model,'sss_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sss_periodMonth'); ?>
		<?php echo $form->textField($model,'sss_periodMonth',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sss_periodOfDeduction'); ?>
		<?php echo $form->textField($model,'sss_periodOfDeduction',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sss_periodYear'); ?>
		<?php echo $form->textField($model,'sss_periodYear',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sss_loanMonthlyDeduction'); ?>
		<?php echo $form->textField($model,'sss_loanMonthlyDeduction',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sss_salarybracket'); ?>
		<?php echo $form->textField($model,'sss_salarybracket',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sss_totalMonthlyContribution'); ?>
		<?php echo $form->textField($model,'sss_totalMonthlyContribution',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sss_totalDeduction'); ?>
		<?php echo $form->textField($model,'sss_totalDeduction',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->