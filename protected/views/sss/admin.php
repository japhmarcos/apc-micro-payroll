<?php
/* @var $this SssController */
/* @var $model sss */

$this->breadcrumbs=array(
	'SSS Records'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List All SSS Records', 'url'=>array('index')),
	array('label'=>'Create SSS Record', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sss-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage SSS Records</h1>

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
	'id'=>'sss-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array(
             'name'=>'employee_id',
             'filter'=>CHtml::listData(pagibig::model()->findAll(array('order'=>'employee_id ASC')),'employee_id','EmployeeFullName'),
             'value'=>'pagibig::Model()->FindByPk($data->id)->EmployeeFullName',
        ),
		'sss_no',
		'sss_date',
		'sss_periodMonth',
		'sss_periodYear',
		'sss_totalDeduction',
		/*
		'earnings_id',
		'sss_periodOfDeduction',
		'sss_loanMonthlyDeduction',
		'sss_salarybracket',
		'sss_totalMonthlyContribution',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
