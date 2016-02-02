<?php
/* @var $this HosotimviecController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Tạo hồ sơ tìm việc', 'url'=>array('create')),
	array('label'=>'Hồ sơ của tôi', 'url'=>array('myindex')),
	
);
?>

<h1>Hồ sơ tìm việc</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


