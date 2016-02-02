<?php
/* @var $this SiteController */
/* @var $data Hosotimviec */
?>

<?php
$ntd = User::model()->find('id=' . $data->hosocanhan_id);
if ($ntd->getAttribute('loainguoidung') == 1):
	?>
	<div class="div_vieclam">
		<?php if ($data->mucluong_id >= 7): ?>
			<div class="banner-hot">
			<?php else: ?>
				<div>
				<?php endif; ?>

				<div style="padding-left: 15px;">
					<span style="font-size: 20px;"><?php echo Chtml::link(CHtml::encode($data->vtmongmuon), array('view', 'id' => $data->id)) ?></span>


					<p>
						<?php
						//$_model=$this->loadModel($data->hosocanhan_id);
						//print_r($_model)
						$_md = Hosotuyendung::model()->find('user_id=' . $data->hosocanhan_id);
						//echo $data->hosocanhan_id;
						echo $_md->getAttribute('tencty');

						//print_r($_tencty);
						?>

					</p>
				</div>
			</div>
	</div>
	<div class="div_vieclam" style="text-align: right;">
		<blockquote>Mức lương: <?php echo $data->mucluong->mucluong; ?></blockquote>
		<blockquote>Địa điểm: <?php echo $data->diadiem->diadiem; ?></blockquote>

	</div>
	<hr>


	<?php endif; ?>

