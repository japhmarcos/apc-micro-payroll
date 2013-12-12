<?php
/* @var $this EmployeeController */
/* @var $model employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List All Employees', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#employee-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Employees</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'employee-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',	
		array(
             'name'=>'department_id',
             'filter'=>CHtml::listData(employee::model()->findAll(array('order'=>'department_id ASC')),'department_id','DepartmentName'),
             'value'=>'employee::Model()->FindByPk($data->id)->DepartmentName',
        ),
		'employee_lastName',
		'employee_firstName',
		'employee_middleName',
		'employee_age',
		/*
		'employee_homeAddress',
		'employee_city',
		'employee_zipCode',
		'employee_dateOfBirth',
		'employee_contactNo',
		'employee_civilStatus',
		'employee_gender',
		'employee_dateHired',
		'employee_dateOfRegularization',
		'employee_philhealthNo',
		'employee_sssNo',
		'employee_pagIbigNo',
		'employee_tinNo',
		'employee_exemptionStatus',
		'employee_bankAccountNo',
		'employee_minimumHoursOfWork',
		'employee_salaryPerHour',
		'employee_daysPerWeek',
		'employee_salaryPerDay',
		'employee_monthlySalary',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
