<?php
/* @var $this PagibigController */
/* @var $model pagibig */

$this->breadcrumbs=array(
	'Pag-ibig Records'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List All Pag-ibig Records', 'url'=>array('index')),
	array('label'=>'Create Pag-ibig Record', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pagibig-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Pag-ibig Records</h1>

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
	'id'=>'pagibig-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
             'name'=>'employee_id',
             'filter'=>CHtml::listData(pagibig::model()->findAll(array('order'=>'employee_id ASC')),'employee_id','EmployeeFullName'),
             'value'=>'pagibig::Model()->FindByPk($data->id)->EmployeeFullName',
        ),
		'id',
		'pagibig_no',
		'pagibig_date',
		'pagibig_periodMonth',
		'pagibig_periodDeduction',
		'pagibig_totalMonthlyDeduction',
		/*
		'pagibig_periodYear',
		'pagibig_monthlyContribution',
		'pagibig_loanMonthlyDeduction',
		'pagibig_totalMonthlyDeduction',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
