<?php
/* @var $this PhilhealthController */
/* @var $model philhealth */
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
		<?php echo $form->label($model,'philhealth_no'); ?>
		<?php echo $form->textField($model,'philhealth_no',array('size'=>14,'maxlength'=>14)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monthly_salary'); ?>
		<?php echo $form->textField($model,'monthly_salary',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_date'); ?>
		<?php echo $form->textField($model,'philhealth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_periodMonth'); ?>
		<?php echo $form->textField($model,'philhealth_periodMonth',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_periodOfDeduction'); ?>
		<?php echo $form->textField($model,'philhealth_periodOfDeduction',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_periodYear'); ?>
		<?php echo $form->textField($model,'philhealth_periodYear',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'philhealth_salarybracket'); ?>
		<?php echo $form->textField($model,'philhealth_salarybracket',array('size'=>25,'maxlength'=>25)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'philhealth_totalDeduction'); ?>
		<?php echo $form->textField($model,'philhealth_totalDeduction',array('size'=>10,'maxlength'=>10)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->