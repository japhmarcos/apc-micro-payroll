<?php
/* @var $this Withholding_tax_tableController */
/* @var $model withholding_tax_table */

$this->breadcrumbs=array(
	'Withholding Tax Table'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Exemption Statuses', 'url'=>array('index')),
	array('label'=>'Add Exemption Status', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#withholding-tax-table-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Withholding Tax Table</h1>

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
	'id'=>'withholding-tax-table-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'exemption_status',
		'exemption_value',
		'salary_base',
		'percentage_excess',
		'base_tax',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
