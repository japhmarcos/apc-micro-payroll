<?php
/* @var $this PagibigController */
/* @var $model pagibig */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'pagibig-form',
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
                'url'=>CController::createUrl('dynamicPagibigNumber'),
                'update' => '#'.CHtml::activeId($model, 'pagibig_no'),
                ))); ?>
                <?php echo $form->error($model,'employee_id'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'pagibig_no'); ?>
                <?php echo $form->dropDownList($model,'pagibig_no',array()); ?>
                <?php echo $form->error($model,'pagibig_no'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'pagibig_date'); ?>
                <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'attribute'=>'pagibig_date','model'=>$model, 'options'=>array(
                        'yearRange'=>'1950:2013',
                        'defaultDate'=>'-0y',
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'buttonText'=>'Select',
                        'dateFormat'=>'yy-mm-dd',
                        'value'=>(!empty($model->pagibig_date))?(is_numeric($model->pagibig_date))?date('yy-mm-dd',$model->pagibig_date):$model->pagibig_date:date('Y-mm-dd')
                        ),'htmlOptions'=>array(
                        'style'=>'width:80px;vertical-align:top'
                        ),
                        ));?>
                <?php echo $form->error($model,'pagibig_date'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'pagibig_periodMonth'); ?>
                <?php
                $pagibig_periodMonth= array('prompt'=>'Select Month','January'=>'January', 'February'=>'February', 'March'=>'March','April'=>'April'
                                ,'May'=>'May','June'=>'June','July'=>'July','August'=>'August','September'=>'September','October'=>'October','November'=>'November','December'=>'December');
                echo $form->dropDownList($model,'pagibig_periodMonth',$pagibig_periodMonth); ?>
                <?php echo $form->error($model,'pagibig_periodMonth'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'pagibig_periodDeduction'); ?>
                <?php
                $pagibig_periodDeduction = array('prompt'=>'Select Date Range','1-15'=>'1-15', '16-30/31'=>'16-30/31');
                echo $form->dropDownList($model,'pagibig_periodDeduction',$pagibig_periodDeduction); ?>
                <?php echo $form->error($model,'pagibig_periodDeduction'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'pagibig_periodYear'); ?>
                <?php $periodYear= Range(2000,2025);
                echo $form->dropDownList($model,'pagibig_periodYear',$periodYear); ?>
                <?php echo $form->error($model,'pagibig_periodYear'); ?>
        </div>

        <div class="row">
                <?php echo $form->labelEx($model,'pagibig_loanMonthlyDeduction'); ?>
                <?php echo $form->textField($model,'pagibig_loanMonthlyDeduction',array('size'=>10,'maxlength'=>10)); ?>
                <?php echo $form->error($model,'pagibig_loanMonthlyDeduction'); ?>
        </div>

        <div class="row buttons">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- form -->
