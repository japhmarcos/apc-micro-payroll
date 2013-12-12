<?php
/* @var $this Sss_salarybracketController */
/* @var $model sss_salarybracket */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sss-salarybracket-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'range_of_compensation'); ?>
		<?php echo $form->textField($model,'range_of_compensation',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'range_of_compensation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_contribution'); ?>
		<?php echo $form->textField($model,'employee_contribution',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'employee_contribution'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employer_contribution'); ?>
		<?php echo $form->textField($model,'employer_contribution',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'employer_contribution'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->