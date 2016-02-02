

<?php

$getId = Yii::app()->user->getId();
$getModel = User::model()->findByPk($getId);
//$loainguoidung=$getModel->loainguoidung;
//echo $getId;
//echo Yii::app()->user->getLoainguoidung();
//if(Yii::app()->user->getLoainguoidung())
if ($getModel->getAttribute('loainguoidung') == 0)
{
echo '<div class="box-center"><h3>Hồ sơ tìm việc của tôi</h3></div>';
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewhstv',
));
}
else if ($getModel->getAttribute('loainguoidung') == 1)
{
	echo '<div class="box-center"><h3>Hồ sơ tuyển dụng của tôi</h3></div>';
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewhstd',
));
}
?>



