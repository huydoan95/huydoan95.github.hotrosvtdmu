<?php
/* @var $this HosotimviecController */
/* @var $model Hosotimviec */

$this->breadcrumbs=array(
	'Hosotimviecs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Hosotimviec', 'url'=>array('index')),
	array('label'=>'Create Hosotimviec', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#hosotimviec-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Hosotimviecs</h1>

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
	'id'=>'hosotimviec-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'capbac_id',
		'nganhnghe_id',
		'diadiem_id',
		'mucluong_id',
		'hinhthuc_id',
		/*
		'vtmongmuon',
		'hosocanhan_id',
		'tg_tao_hs',
		'tg_capnhat_hs',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
