<?php
/* @var $this Withholding_taxController */
/* @var $model withholding_tax */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'withholding-tax-form',
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
		'url'=>CController::createUrl('dynamicTinNumber'),
		'update' => '#'.CHtml::activeId($model, 'tin_number'),
		))); ?>
		<?php echo $form->error($model,'employee_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tin_number'); ?>
		<?php echo $form->dropDownList($model,'tin_number',array()); ?>
		<?php echo $form->error($model,'tin_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'withholdingtax_exemption_status'); ?>
		<?php echo $form->dropDownList($model, 'withholdingtax_exemption_status', CHtml::listData(
		withholding_tax_table::model()->findAll(), 'exemption_status', 'exemption_status'),
		array(
		'prompt' => 'Select Exemption Status',
		'ajax' => array(
		'type' => 'POST',
		'url'=>CController::createUrl('dynamicExemption'),
		'update' => '#'.CHtml::activeId($model,'withholdingtax_exemption'),
		))); ?>
		<?php echo $form->error($model,'withholdingtax_exemption_status'); ?>
	</div>
	
	<div class="row">
                <?php echo $form->labelEx($model,'withholdingtax_salaryBase'); ?>
                <?php echo $form->dropDownList($model,'withholdingtax_salaryBase',
		CHtml::listData(withholding_tax_table::model()->findAll(),'salary_base','salary_base','exemption_status'),
		array(
		'prompt' => 'Select Salary Base',)); ?>
                <?php echo $form->error($model,'withholdingtax_salaryBase'); ?>
        </div>

    <div class="row">
                <?php echo $form->labelEx($model,'withholdingtax_baseTax'); ?>
                <?php echo $form->dropDownList($model,'withholdingtax_baseTax',
		CHtml::listData(withholding_tax_table::model()->findAll(),'base_tax','base_tax','exemption_status'),
		array(
		'prompt' => 'Select Base Tax',)); ?>
                <?php echo $form->error($model,'withholdingtax_baseTax'); ?>
    </div>

    <div class="row">
                <?php echo $form->labelEx($model,'withholdingtax_percentageExcess'); ?>
                <?php echo $form->dropDownList($model,'withholdingtax_percentageExcess',
		CHtml::listData(withholding_tax_table::model()->findAll(),'percentage_excess','percentage_excess','exemption_status'),
		array(
		'prompt' => 'Select Percentage Excess',)); ?>
                <?php echo $form->error($model,'withholdingtax_percentageExcess'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'withholdingtax_date'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'attribute'=>'withholdingtax_date','model'=>$model, 'options'=>array(
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
		<?php echo $form->error($model,'withholdingtax_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'withholdingtax_periodMonth'); ?>
		<?php
                $withholdingtax_periodMonth= array('prompt'=>'Select Month','January'=>'January', 'February'=>'February', 'March'=>'March','April'=>'April'
				,'May'=>'May','June'=>'June','July'=>'July','August'=>'August','September'=>'September','October'=>'October','November'=>'November','December'=>'December');
                echo $form->dropDownList($model,'withholdingtax_periodMonth',$withholdingtax_periodMonth); ?>
		<?php echo $form->error($model,'withholdingtax_periodMonth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'withholdingtax_periodOfDeduction'); ?>
		<?php
                $periodOfDeduction = array('prompt'=>'Select Date Range','1-15'=>'1-15', '16-30/31'=>'16-30/31');
                echo $form->dropDownList($model,'withholdingtax_periodOfDeduction',$periodOfDeduction); ?>
		<?php echo $form->error($model,'withholdingtax_periodOfDeduction'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'withholdingtax_periodYear'); ?>
		<?php $periodYear= Range(2000,2025);
                echo $form->dropDownList($model,'withholdingtax_periodYear',$periodYear); ?>
		<?php echo $form->error($model,'withholdingtax_periodYear'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'withholdingtax_exemption'); ?>
		<?php echo $form->dropDownList($model,'withholdingtax_exemption',array()); ?>
		<?php echo $form->error($model,'withholdingtax_exemption'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'taxable_income'); ?>
		<?php echo $form->dropDownList($model,'taxable_income',
		CHtml::listData(deductions::model()->findAll(),'deductions_totalNetPayBeforeTax','DeductionInfo','EmployeeFullName'),
		array(
		'prompt' => 'Select Taxable Income',)); ?>
		<?php echo $form->error($model,'taxable_income'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->