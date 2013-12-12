<?php
/* @var $this EmployeeController */
/* @var $model employee */

$this->breadcrumbs=array(
	'Employees'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List All Employees', 'url'=>array('index')),
	array('label'=>'Create Employee', 'url'=>array('create')),
	array('label'=>'Update Employee', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Employee', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Employees', 'url'=>array('admin')),
);
?>

<h1>View Employee #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array(               
            'label'=>'Department',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->department->department_name), array('department/view','id'=>$model->department->id)),
        ),
		'employee_lastName',
		'employee_firstName',
		'employee_middleName',
		'employee_age',
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
	),
)); ?>
