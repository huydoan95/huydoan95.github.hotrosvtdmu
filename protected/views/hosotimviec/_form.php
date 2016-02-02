<?php
/* @var $this HosotimviecController */
/* @var $model Hosotimviec */
/* @var $form CActiveForm */
?>

<div class="form">


	<?php
	$form = $this->beginWidget('CActiveForm', array(
		'id' => 'hosotimviec-form',
		'enableAjaxValidation' => false,
	));
	?>

	<p class="note">Các trường có dấu <span class="required">*</span> là những trường bắt buộc.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model, 'capbac_id'); ?>
		<?php echo $form->dropDownList($model, 'capbac_id', $this->getCapBac()); ?>
		<?php echo $form->error($model, 'capbac_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'nganhnghe_id'); ?>
		<?php echo $form->dropDownList($model, 'nganhnghe_id', $this->getNganhNghe()); ?>
		<?php echo $form->error($model, 'nganhnghe_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'diadiem_id'); ?>
		<?php echo $form->dropDownList($model, 'diadiem_id', $this->getDiaDiem()); ?>
		<?php echo $form->error($model, 'diadiem_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'mucluong_id'); ?>
		<?php echo $form->dropDownList($model, 'mucluong_id', $this->getMucLuong()); ?>
		<?php echo $form->error($model, 'mucluong_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'hinhthuc_id'); ?>
		<?php echo $form->dropDownList($model, 'hinhthuc_id', $this->getHinhThuc()); ?>
		<?php echo $form->error($model, 'hinhthuc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'vtmongmuon'); ?>
		<?php echo $form->textField($model, 'vtmongmuon', array('size' => 50, 'maxlength' => 50)); ?>
		<?php echo $form->error($model, 'vtmongmuon'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Tạo' : 'Lưu'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->