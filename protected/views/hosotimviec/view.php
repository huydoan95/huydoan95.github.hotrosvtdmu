<?php
/* @var $this HosotimviecController */
/* @var $model Hosotimviec */

$this->menu=array(
	//array('label'=>'Xem hồ sơ', 'url'=>array('index')),
	array('label'=>'Tạo hồ sơ', 'url'=>array('create')),
	array('label'=>'Cập nhật hồ sơ', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Xóa hồ sơ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Quản lý hồ sơ', 'url'=>array('admin')),
);
?>

<h1>Xem hồ sơ tìm việc</h1>

<?php
//print_r($model);
$model->capbac_id=$model->capbac->capbac;
$model->nganhnghe_id=$model->nganhnghe->nganhnghe;
$model->diadiem_id=$model->diadiem->diadiem;
$model->mucluong_id=$model->mucluong->mucluong;
$model->hinhthuc_id=$model->hinhthuc->hinhthuc;
 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		
		'vtmongmuon',
		'mucluong_id',
		'hinhthuc_id',
		'capbac_id',
		'nganhnghe_id',
		'diadiem_id',
	),
)); ?>
