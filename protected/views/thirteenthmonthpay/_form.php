<?php
/* @var $this ThirteenthmonthpayController */
/* @var $model thirteenthmonthpay */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'thirteenthmonthpay-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'thirteenthMonthPay_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'thirteenthMonthPay_date','model'=>$model, 'options'=>array(
			'yearRange'=>'1950:2013',
			'defaultDate'=>'-0y',
			'changeMonth'=>true,
			'changeYear'=>true,
			'buttonText'=>'Select',
			'dateFormat'=>'yy-mm-dd',
			'value'=>(!empty($model->thirteenthMonthPay_date))?(is_numeric($model->thirteenthMonthPay_date))?date('yy-mm-dd',$model->thirteenthMonthPay_date):$model->thirteenthMonthPay_date:date('Y-mm-dd')
			),'htmlOptions'=>array(
			'style'=>'width:80px;vertical-align:top'
			),
			));?>
		<?php echo $form->error($model,'thirteenthMonthPay_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thirteenthMonthPay_dateOfRegularization'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'thirteenthMonthPay_dateOfRegularization','model'=>$model, 'options'=>array(
			'yearRange'=>'1950:2013',
			'defaultDate'=>'-0y',
			'changeMonth'=>true,
			'changeYear'=>true,
			'buttonText'=>'Select',
			'dateFormat'=>'yy-mm-dd',
			'value'=>(!empty($model->thirteenthMonthPay_dateOfRegularization))?(is_numeric($model->thirteenthMonthPay_dateOfRegularization))?date('yy-mm-dd',$model->thirteenthMonthPay_dateOfRegularization):$model->thirteenthMonthPay_dateOfRegularization:date('Y-mm-dd')
			),'htmlOptions'=>array(
			'style'=>'width:80px;vertical-align:top'
			),
			));?>
		<?php echo $form->error($model,'thirteenthMonthPay_dateOfRegularization'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thirteenthMonthPay_totalBonus'); ?>
		<?php echo $form->textField($model,'thirteenthMonthPay_totalBonus',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'thirteenthMonthPay_totalBonus'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(
		Employee::model()->findAll(), 'id', 'FullName'),
		array(
		'prompt' => 'Select Employee',
		)); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->