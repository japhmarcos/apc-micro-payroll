<?php
/* @var $this PhilhealthsalarybracketController */
/* @var $model philhealthsalarybracket */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'philhealthsalarybracket-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_range'); ?>
		<?php echo $form->textField($model,'salary_range',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'salary_range'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_share'); ?>
		<?php echo $form->textField($model,'employee_share',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'employee_share'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employer_share'); ?>
		<?php echo $form->textField($model,'employer_share',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'employer_share'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->