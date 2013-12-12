<?php
/* @var $this PhilhealthController */
/* @var $model philhealth */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'philhealth-form',
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
		'url'=>CController::createUrl('dynamicPhilhealthNumber'),
		'update' => '#'.CHtml::activeId($model, 'philhealth_no'),
		))); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_no'); ?>
		<?php echo $form->dropDownList($model,'philhealth_no',
		array()); ?>
		<?php echo $form->error($model,'philhealth_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monthly_salary'); ?>
		<?php echo $form->dropDownList($model,'monthly_salary',
		CHtml::listData(earnings::model()->findAll(),'earnings_totalGross','EarningsInfo','EmployeeFullName'),
		array(
		'prompt' => 'Select Philhealth Contribution',)); ?>
		<?php echo $form->error($model,'monthly_salary'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'philhealth_date','model'=>$model, 'options'=>array(
			'yearRange'=>'1950:2013',
			'defaultDate'=>'-0y',
			'changeMonth'=>true,
			'changeYear'=>true,
			'dateFormat'=>'yy-mm-dd',
			'value'=>(!empty($model->philhealth_date))?(is_numeric($model->philhealth_date))?date('yy-mm-dd',$model->philhealth_date):$model->philhealth_date:date('Y-mm-dd')
			),'htmlOptions'=>array(
			'style'=>'width:80px;vertical-align:top'
			),
			));?>
		<?php echo $form->error($model,'philhealth_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_periodMonth'); ?>
		<?php
                $philhealth_periodMonth= array('prompt'=>'Select Month','January'=>'January', 'February'=>'February', 'March'=>'March','April'=>'April'
				,'May'=>'May','June'=>'June','July'=>'July','August'=>'August','September'=>'September','October'=>'October','November'=>'November','December'=>'December');
                echo $form->dropDownList($model,'philhealth_periodMonth',$philhealth_periodMonth); ?>
		<?php echo $form->error($model,'philhealth_periodMonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_periodOfDeduction'); ?>
		<?php
                $philhealth_periodOfDeduction = array('prompt'=>'Select Date Range','1-15'=>'1-15', '16-30/31'=>'16-30/31');
                echo $form->dropDownList($model,'philhealth_periodOfDeduction',$philhealth_periodOfDeduction); ?>
		<?php echo $form->error($model,'philhealth_periodOfDeduction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_periodYear'); ?>
		<?php $periodYear= Range(2000,2025);
                echo $form->dropDownList($model,'philhealth_periodYear',$periodYear); ?>
		<?php echo $form->error($model,'philhealth_periodYear'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_salarybracket'); ?>
		<?php echo $form->dropDownList($model, 'philhealth_salarybracket', CHtml::listData(
		philhealthsalarybracket::model()->findAll(), 'salary_range', 'salary_range'),
		array(
		'prompt' => 'Select Salary Range',
		'ajax' => array(
		'type' => 'POST',
		'url'=>CController::createUrl('dynamicSalaryBracket'),
		'update' => '#'.CHtml::activeId($model,'philhealth_totalDeduction'),
		))); ?>
		<?php echo $form->error($model,'philhealth_salarybracket'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'philhealth_totalDeduction'); ?>
		<?php echo $form->dropDownList($model,'philhealth_totalDeduction',array()); ?>
		<?php echo $form->error($model,'philhealth_totalDeduction'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->