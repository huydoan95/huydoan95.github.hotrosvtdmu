<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Đăng nhập';
?>




<div class="form">
	<?php
	$form = $this->beginWidget('CActiveForm', array(
		'id' => 'login-form',
		'enableClientValidation' => true,
		'clientOptions' => array(
			'validateOnSubmit' => true,
		),
	));
	?>

	<h1>Đăng nhập</h1>

	<p>Vui lòng điền vào theo mẫu thông tin đăng nhập:</p>



	<p class="note">Những trường có dấu <span class="required">*</span> là những trường bắt buộc.</p>

	<div class="row">
		<?php echo $form->labelEx($model, 'username'); ?>
		<?php echo $form->textField($model, 'username'); ?>
		<?php echo $form->error($model, 'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'password'); ?>
		<?php echo $form->passwordField($model, 'password'); ?>
		<?php echo $form->error($model, 'password'); ?>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model, 'rememberMe'); ?>
		<?php echo $form->label($model, 'rememberMe'); ?>
		<?php echo $form->error($model, 'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Đăng nhập'); ?>
	</div>

	<?php $this->endWidget(); ?>
</div><!-- form -->
