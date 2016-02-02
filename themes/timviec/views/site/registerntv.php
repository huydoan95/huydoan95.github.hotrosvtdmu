<?php
/* @var $this SiteController */
/* @var $model RegisterForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Đăng ký';

?>

<h1>Người tìm việc đăng ký</h1>

<p>Vui lòng điền vào theo mẫu thông tin đăng ký:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registerntv-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Những trường có dấu <span class="required">*</span> là những trường bắt buộc.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'retypepassword'); ?>
		<?php echo $form->passwordField($model,'retypepassword'); ?>
		<?php echo $form->error($model,'retypepassword'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->emailField($model,'email'); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Đăng ký'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
