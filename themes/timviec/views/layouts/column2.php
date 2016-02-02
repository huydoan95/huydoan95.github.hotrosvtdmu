<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<!--<div class="span-19">-->
<div id="content">
	<div class="span-19">
		<?php echo $content; ?>
	</div>

	<!--</div>-->
	<div class="span-6 last">
		<div id="sidebar">
			<?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title' => 'Thao tác',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items' => $this->menu,
				'htmlOptions' => array('class' => 'operations'),
			));
			$this->endWidget();
			?>
			<!--</div>--><!-- sidebar -->
		</div>
	</div><!-- content -->
	<div class="clear"></div>
</div>
<?php $this->endContent(); ?>