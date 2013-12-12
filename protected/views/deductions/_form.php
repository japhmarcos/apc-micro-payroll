<?php
/* @var $this DeductionsController */
/* @var $model deductions */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'deductions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->dropDownList($model, 'employee_id', CHtml::listData(
		employee::model()->findAll(), 'id', 'FullName'),
		array(
		'prompt' => 'Select Employee',
		'ajax' => array(
		'type' => 'POST',
		'url'=>CController::createUrl('dynamicEarnings'),
		'update' => '#'.CHtml::activeId($model, 'earnings_id'),
		))); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'earnings'); ?>
		<?php echo $form->dropDownList($model, 'earnings_id',
		array()); ?>
		<?php echo $form->error($model,'earnings_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth'); ?>
		<?php echo $form->dropDownList($model,'philhealth_id',
		CHtml::listData(philhealth::model()->findAll(),'id','PhilhealthInfo','EmployeeFullName'),
		array(
		'prompt' => 'Select Philhealth Contribution',)); ?>
		<?php echo $form->error($model,'philhealth_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sss'); ?>
		<?php echo $form->dropDownList($model,'sss_id',
		CHtml::listData(sss::model()->findAll(),'id','SSSInfo','EmployeeFullName'),
		array(
		'prompt' => 'Select SSS Contribution',)); ?>
		<?php echo $form->error($model,'sss_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pagibig'); ?>
		<?php echo $form->dropDownList($model,'pagibig_id',
		CHtml::listData(pagibig::model()->findAll(),'id','PagibigInfo','EmployeeFullName'),
		array(
		'prompt' => 'Select Pagibig Contribution',)); ?>
		<?php echo $form->error($model,'pagibig_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deductions_date'); ?>
			<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'deductions_date','model'=>$model, 'options'=>array(
			'yearRange'=>'1950:2013',
			'defaultDate'=>'-0y',
			'changeMonth'=>true,
			'changeYear'=>true,
			'buttonText'=>'Select',
			'dateFormat'=>'yy-mm-dd',
			'value'=>(!empty($model->deductions_date))?(is_numeric($model->deductions_date))?date('yy-mm-dd',$model->deductions_date):$model->deductions_date:date('Y-mm-dd')
			),'htmlOptions'=>array(
			'style'=>'width:80px;vertical-align:top'
			),
			));?>
		<?php echo $form->error($model,'deductions_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deductions_periodMonth'); ?>
		<?php
                $deductions_periodMonth= array('prompt'=>'Select Month','January'=>'January', 'February'=>'February', 'March'=>'March','April'=>'April'
				,'May'=>'May','June'=>'June','July'=>'July','August'=>'August','September'=>'September','October'=>'October','November'=>'November','December'=>'December');
                echo $form->dropDownList($model,'deductions_periodMonth',$deductions_periodMonth); ?>
		<?php echo $form->error($model,'deductions_periodMonth'); ?>
		<?php echo $form->error($model,'deductions_periodMonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deductions_periodDateRange'); ?>
		<?php
                $deductions_periodDateRange = array('prompt'=>'Select Date Range','1-15'=>'1-15', '16-30/31'=>'16-30/31');
                echo $form->dropDownList($model,'deductions_periodDateRange',$deductions_periodDateRange); ?>
		<?php echo $form->error($model,'deductions_periodDateRange'); ?>

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deductions_periodYear'); ?>
		<?php $payroll_year= Range(2000,2025);
                echo $form->dropDownList($model,'deductions_periodYear',$payroll_year); ?>
		<?php echo $form->error($model,'deductions_periodYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deductions_otherDeduction'); ?>
		<?php echo $form->textField($model,'deductions_otherDeduction',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'deductions_otherDeduction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deductions_longDistanceCall'); ?>
		<?php echo $form->textField($model,'deductions_longDistanceCall',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'deductions_longDistanceCall'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->