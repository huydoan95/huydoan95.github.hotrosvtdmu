<?php
/* @var $this HosotimviecController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Tạo hồ sơ tuyển dụng', 'url'=>array('create')),
	array('label'=>'Hồ sơ của tôi', 'url'=>array('myindex')),
	//array('label'=>'Quản lý hồ sơ', 'url'=>array('admin')),
);
?>

<div class="box-center"><h3>Hồ sơ tuyển dụng</h3></div>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewhstd',
)); ?>
