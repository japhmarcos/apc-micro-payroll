<?php
/* @var $this Withholding_tax_tableController */
/* @var $model withholding_tax_table */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'withholding-tax-table-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exemption_status'); ?>
		<?php echo $form->textField($model,'exemption_status',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'exemption_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'exemption_value'); ?>
		<?php echo $form->textField($model,'exemption_value',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'exemption_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_base'); ?>
		<?php echo $form->textField($model,'salary_base',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'salary_base'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'percentage_excess'); ?>
		<?php echo $form->textField($model,'percentage_excess',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'percentage_excess'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'base_tax'); ?>
		<?php echo $form->textField($model,'base_tax',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'base_tax'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->