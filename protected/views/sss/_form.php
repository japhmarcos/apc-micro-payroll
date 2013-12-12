<?php
/* @var $this SssController */
/* @var $model sss */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sss-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
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
                'url'=>CController::createUrl('dynamicSSSNumber'),
                'update' => '#'.CHtml::activeId($model, 'sss_no'),
                ))); ?>
                <?php echo $form->error($model,'employee_id'); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'sss_no'); ?>
		<?php echo $form->dropDownList($model,'sss_no',array()); ?>
		<?php echo $form->error($model,'sss_no'); ?>
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
		<?php echo $form->labelEx($model,'sss_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'sss_date','model'=>$model, 'options'=>array(
			'yearRange'=>'1950:2013',
			'defaultDate'=>'-0y',
			'changeMonth'=>true,
			'changeYear'=>true,
			'buttonText'=>'Select',
			'dateFormat'=>'yy-mm-dd',
			'value'=>(!empty($model->sss_date))?(is_numeric($model->sss_date))?date('yy-mm-dd',$model->sss_date):$model->sss_date:date('Y-mm-dd')
			),'htmlOptions'=>array(
			'style'=>'width:80px;vertical-align:top'
			),
			));?>
		<?php echo $form->error($model,'sss_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sss_periodMonth'); ?>
		<?php
                $sss_periodMonth= array('prompt'=>'Select Month','January'=>'January', 'February'=>'February', 'March'=>'March','April'=>'April'
				,'May'=>'May','June'=>'June','July'=>'July','August'=>'August','September'=>'September','October'=>'October','November'=>'November','December'=>'December');
                echo $form->dropDownList($model,'sss_periodMonth',$sss_periodMonth); ?>
		<?php echo $form->error($model,'sss_periodMonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sss_periodOfDeduction'); ?>
		<?php
                $sss_periodOfDeduction = array('prompt'=>'Select Date Range','1-15'=>'1-15', '16-30/31'=>'16-30/31');
                echo $form->dropDownList($model,'sss_periodOfDeduction',$sss_periodOfDeduction); ?>
		<?php echo $form->error($model,'sss_periodOfDeduction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sss_periodYear'); ?>
		<?php $periodYear= Range(2000,2025);
                echo $form->dropDownList($model,'sss_periodYear',$periodYear); ?>
		<?php echo $form->error($model,'sss_periodYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sss_loanMonthlyDeduction'); ?>
		<?php echo $form->textField($model,'sss_loanMonthlyDeduction',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sss_loanMonthlyDeduction'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'sss_salarybracket'); ?>
		<?php echo $form->dropDownList($model, 'sss_salarybracket', CHtml::listData(
		sss_salarybracket::model()->findAll(),'range_of_compensation','range_of_compensation'),
		array(
		'prompt' => 'Select Salary Range',
		'ajax' => array(
		'type' => 'POST',
		'url'=>CController::createUrl('dynamicSalaryBracket'),
		'update' => '#'.CHtml::activeId($model,'sss_totalMonthlyContribution'),
		))); ?>
		<?php echo $form->error($model,'sss_salarybracket'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sss_totalMonthlyContribution'); ?>
		<?php echo $form->dropDownList($model,'sss_totalMonthlyContribution',array()); ?>
		<?php echo $form->error($model,'sss_totalMonthlyContribution'); ?>
	</div>

	<?php /*	
	<div class="row">
		 echo $form->labelEx($model,'sss_totalDeduction'); ?>
		<?php echo $form->textField($model,'sss_totalDeduction',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'sss_totalDeduction'); 
	</div>*/?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->