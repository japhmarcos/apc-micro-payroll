<?php
/* @var $this PhilhealthsalarybracketController */
/* @var $model philhealthsalarybracket */
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
		<?php echo $form->label($model,'salary_range'); ?>
		<?php echo $form->textField($model,'salary_range',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employee_share'); ?>
		<?php echo $form->textField($model,'employee_share',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'employer_share'); ?>
		<?php echo $form->textField($model,'employer_share',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_monthly_premium'); ?>
		<?php echo $form->textField($model,'total_monthly_premium',array('size'=>10,'maxlength'=>10)); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->