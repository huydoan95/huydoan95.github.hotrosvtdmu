<?php
/* @var $this HosotimviecController */
/* @var $data Hosotimviec */
?>


<?php
$ntd = User::model()->find('id=' . $data->hosocanhan_id);
if ($ntd->getAttribute('loainguoidung') == 1):
	?>
	<div class="div_vieclam">

		<h2 class = "bold_red">

						<!--<a href=""><?php /* echo $data->vtmongmuon; */ ?></a>-->
			<?php echo Chtml::link(CHtml::encode($data->vtmongmuon), array('view', 'id' => $data->id)) ?>

		</h2>

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
<div class="div_vieclam" style="text-align: right;">
		<blockquote>Mức lương: <?php echo $data->mucluong->mucluong; ?>
		<blockquote>Địa điểm: <?php echo $data->diadiem->diadiem; ?>
		
	</div>
<hr>


<?php endif; ?>

