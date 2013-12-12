<?php
/* @var $this Withholding_taxController */
/* @var $model withholding_tax */
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
		<?php echo $form->label($model,'tin_number'); ?>
		<?php echo $form->textField($model,'tin_number',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'withholdingtax_exemption_status'); ?>
		<?php echo $form->textField($model,'withholdingtax_exemption_status',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'withholdingtax_date'); ?>
		<?php echo $form->textField($model,'withholdingtax_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'withholdingtax_periodMonth'); ?>
		<?php echo $form->textField($model,'withholdingtax_periodMonth',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'withholdingtax_periodOfDeduction'); ?>
		<?php echo $form->textField($model,'withholdingtax_periodOfDeduction',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'withholdingtax_periodYear'); ?>
		<?php echo $form->textField($model,'withholdingtax_periodYear',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'taxable_income'); ?>
		<?php echo $form->textField($model,'taxable_income'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'withholdingtax_salaryBase'); ?>
		<?php echo $form->textField($model,'withholdingtax_salaryBase',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'withholdingtax_baseTax'); ?>
		<?php echo $form->textField($model,'withholdingtax_baseTax',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'withholdingtax_percentageExcess'); ?>
		<?php echo $form->textField($model,'withholdingtax_percentageExcess',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'withholdingtax_exemption'); ?>
		<?php echo $form->textField($model,'withholdingtax_exemption',array('size'=>10,'maxlength'=>10)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'total_withholdingTax'); ?>
		<?php echo $form->textField($model,'total_withholdingTax',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->