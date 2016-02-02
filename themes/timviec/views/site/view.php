<?php
/* @var $this HosotimviecController */
/* @var $model Hosotimviec */

$this->menu = array(
	array('label' => 'Xem hồ sơ', 'url' => array('index')),
	array('label' => 'Tạo hồ sơ', 'url' => array('create')),
	array('label' => 'Hồ sơ của tôi', 'url' => array('myindex'),
//array('label'=>'Xóa hồ sơ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//array('label'=>'Quản lý hồ sơ', 'url'=>array('admin')),
		));
?>

<h1><?php
	$_md = Hosotuyendung::model()->find('user_id=' . $model->hosocanhan_id);

	echo $_md->getAttribute('tencty');
	?></h1>

<?php
$model->capbac_id = $model->capbac->capbac;
$model->nganhnghe_id = $model->nganhnghe->nganhnghe;
$model->diadiem_id = $model->diadiem->diadiem;
$model->mucluong_id = $model->mucluong->mucluong;
$model->hinhthuc_id = $model->hinhthuc->hinhthuc;
$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		
		'vtmongmuon',
		'mucluong_id',
		'capbac_id',
		'nganhnghe_id',
		'diadiem_id',
		
		'hinhthuc_id',
	),
));
?>
