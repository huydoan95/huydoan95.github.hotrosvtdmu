<?php
/* @var $this HosotimviecController */
/* @var $model Hosotimviec */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'capbac_id'); ?>
		<?php echo $form->textField($model,'capbac_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nganhnghe_id'); ?>
		<?php echo $form->textField($model,'nganhnghe_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diadiem_id'); ?>
		<?php echo $form->textField($model,'diadiem_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mucluong_id'); ?>
		<?php echo $form->textField($model,'mucluong_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hinhthuc_id'); ?>
		<?php echo $form->textField($model,'hinhthuc_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vtmongmuon'); ?>
		<?php echo $form->textField($model,'vtmongmuon',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->