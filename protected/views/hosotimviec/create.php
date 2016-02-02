<?php

/* @var $this HosotimviecController */
/* @var $model Hosotimviec */
$this->menu=array(
	array('label'=>'Xem hồ sơ tìm việc', 'url'=>array('indexntv')),
	array('label'=>'Hồ sơ của tôi', 'url'=>array('myindex')),
	//array('label'=>'Quản lý hồ sơ', 'url'=>array('admin')),
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
	echo '<h1>Người tìm việc tạo hồ sơ tìm việc</h1>';
else if ($getModel->getAttribute('loainguoidung') == 1)
	echo '<h1>Nhà tuyển dụng tạo hồ sơ tìm việc</h1>';
?>

<?php

echo $this->renderPartial('_form', array(
	'model' => $model,
));
?>
