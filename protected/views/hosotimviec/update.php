<?php
/* @var $this HosotimviecController */
/* @var $model Hosotimviec */



$this->menu=array(
	array('label'=>'Xem hồ sơ tìm việc', 'url'=>array('index')),
	array('label'=>'Tạo hồ sơ tìm việc', 'url'=>array('create')),
	//array('label'=>'View Hosotimviec', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Hosotimviec', 'url'=>array('admin')),
);
?>
<?php

$getId = Yii::app()->user->getId();
$getModel = User::model()->findByPk($getId);
//$loainguoidung=$getModel->loainguoidung;
//echo $getId;
//echo Yii::app()->user->getLoainguoidung();
//if(Yii::app()->user->getLoainguoidung())
if ($getModel->getAttribute('loainguoidung') == 0)
	echo '<h1>Cập nhật hồ sơ tìm việc</h1>';
else if ($getModel->getAttribute('loainguoidung') == 1)
	echo '<h1>Cập nhật hồ sơ tuyển dụng</h1>';
?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>