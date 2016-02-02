<?php
/* var $this SiteController */
$this->pageTitle = Yii::app()->name . " - Trang chủ";
?>
<div id="box_hot_news">
	<div class="banner_flash">
		<span>
			<p><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/banner.jpg" border="0" /></p>
		</span>
	</div>

	<div class="nghe_hot">
		<div class="box_nghe_hot">
			<h3> Các ngành nghề hot nhất</h3>
			<p class="css_tits">Tìm ngay trên <span>3</span> Việc làm - <span>Miễn phí!</span></p>
			<ul>
				<?php
				$this->widget('zii.widgets.CMenu', array(
					'items' => array(
						array('label' => 'Bán hàng', 'url' => array('/site', 'view' => 'index')),
						array('label' => 'Bưu chính', 'url' => array('/site/page', 'view' => 'about')),
						array('label' => 'Kế toán', 'url' => array('/site/contact')),
					),
				));
				?>

			</ul>
			<div class="clear"></div>

			<p align="right" class="view_all"><a href="#">Xem tất cả</a></p>
			<div class="box_dk_td">
				<p class="ntv_dk"><?php echo CHtml::link('Người tìm việc đăng ký', array('/site/registerntv')) ?></p>
				<p class="cntd_dk"><?php echo CHtml::link('Nhà tuyển dụng đăng ký', array('/site/registerntd')) ?></p>
			</div>
		</div>
	</div>

</div>
<div class="info_td">
	<div class="box_info-td">

		<div class="tlbm_css">
			<h3><a href="#" title="TÀI LIỆU BIỂU MẪU">TÀI LIỆU BIỂU MẪU</a></h3>
			<p>Các mẫu tài liệu giúp bạn chuẩn bị tốt hơn cho CV ứng tuyển của mình</p>					</div>
		<div class="dhs_css">
			<h3><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=hosotimviec/create" title="Đăng hồ sơ">Đăng hồ sơ</a></h3>
			<p>Hãy tạo hồ sơ ấn tượng với nhà tuyển dụng để tạo được nhiều cơ hội cho mình.</p>					</div>
		<div class="tbvl_css">
			<h3><a href="#" title="Thông báo việc làm">Thông báo việc làm</a></h3>
			<p>Bạn dễ dàng tìm thấy các công việc phù hợp với yêu cầu qua các công cụ tìm kiếm thân thiện.</p>					</div>
		<div class="nktv_css">
			<h3><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=hosotimviec/myindex" title="Nhật ký tìm việc làm">Nhật ký tìm việc làm</a></h3>
			<p>Bạn dễ dàng lưu và ứng tuyển vào công việc phù hợp với yêu cầu của mình</p>					</div>
	</div>
	<div class="clear"></div>
</div>
<div class="clear"></div>


<div id="left">	

	<style type="text/css">
		#ket_qua_img{
			background:url("modules/mod_search_left/tmpl/ajaxloading.gif") no-repeat scroll 100% 60% transparent;
			float:right;
			height:16px;
			width:16px;
		}
	</style>
	<div class="box-left">
		<h3><span>Tìm việc làm</span></h3>
		<div class="search_viec">
			<form action="#" method="get">
				<input type="hidden" value="com_properties" name="option" />
				<input type="hidden" value="search" name="view" />
				<p>
					<?php
					echo CHtml::dropDownList('tinh_tp', '1', $this->getDiaDiem());
					?>

				<!--<div id = "progressccc"></div>-->

				</p>
				<!--<div id = "progressS"></div>-->
				<p>
					<?php
					echo CHtml::dropDownList('loai_nganhnghe', '1', $this->getNganhNghe());
					?>


				</p>
				<!--<div id = "progressTSearch"></div>-->
				<p>
					<?php
					echo CHtml::dropDownList('trinh_do', '1', $this->getTrinhDo());
					?>

				</p>
				<p>
					<?php
					echo CHtml::dropDownList('cap_bac', '1', $this->getCapBac());
					?>

				</p>
				<p>
					<?php
					echo CHtml::dropDownList('muc_luong', '1', $this->getMucLuong());
					?>

				</p>
				<p>
					<?php
					echo CHtml::dropDownList('sonam_kn', '1', $this->getSnKn());
					?>

				</p>
				<div class = "buton_search" align = "right">
					<div align = "left">
						Kết quả :<span id = "ket_qua"></span><span id = "ket_qua_img" style = "visibility:hidden"></span>
					</div>
					<button type = "submit" value = "Search" id = "search_properties">Tìm kiếm</button>
				</div>
				<input type = "hidden" value = "" name = "ketqua_hidd" id = "ketqua_hidd" />
				<input type = "hidden" name = "d2e179f2ba0e1e26ba742c56c974b856" value = "1" /> </form>
		</div>
	</div>
	<div class = "box-left">
		<h3>Việc Làm tại công ty</h3>
		<div class = "vieclam-company">
			<p><a href = "#" title = "http://creativevietnam.vn" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/company10.jpg" width = "50" height = "15"></a></p>
			<p><a href = "#" title = "http://creativevietnam.vn" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/company9.jpg" width = "50" height = "15"></a></p>
			<p><a href = "#" title = "http://creativevietnam.vn" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/company8.jpg" width = "50" height = "15"></a></p>
			<p><a href = "#" title = "http://creativevietnam.vn" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/company7.jpg" width = "50" height = "15"></a></p>
			<p><a href = "#" title = "http://creativevietnam.vn" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/company6.jpg" width = "50" height = "15"></a></p>
			<p><a href = "#" title = "" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/company5.jpg" width = "50" height = "15"></a></p>
			<p><a href = "#" title = "http://vieclamviet.com.vn" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/company4.jpg" width = "50" height = "15"></a></p>
			<p><a href = "#" title = "http://vieclamviet.com.vn" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/company3.jpg" width = "50" height = "15"></a></p>
			<p><a href = "#" title = "Binh duong jobs" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/company2.jpg" width = "50" height = "15"></a></p>
			<p><a href = "#" title = "vnworks" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/company1.jpg" width = "50" height = "15"></a></p>
		</div>
		<div class = "clear"></div>
	</div>

</div><!--left-->
<div id = "center">

	<style>
		h2.bold_red a{

			color:red;
			
		}
		.top_job{
			background:#CCC;
		}
		.other_job{
		}
	</style>
	<div class = "box-center">

		<h3><span>Việc Làm Tốt Nhất</span></h3>

		<div class = "css_vieclamtot">
			<!--hien thi top dau -->
			<div class = "top_job" style = "boder:1px solid #CCC;">

				<div class = "vieclam">
					
						
							
							<?php
							
							$this->widget('zii.widgets.CListView', array(
								'dataProvider' => $dataProvider,
								'itemView' => '_viewhstd',
							));
							?>
						
							






						

						
					
					<!--<div class="div_vieclam">
						<h2 class = 'bold_red'>
							<a href = "#">
								Trưởng phòng kinh doanh
							</a>

						</h2>

						<p>Công ty B</p>
					</div>
					<div class="div_vieclam">
						<h2 class = 'bold_red'>
							<a href = "#">
								Trưởng phòng nhân sự
							</a>

						</h2>

						<p>Công ty C</p>
					</div>
					<div class="div_vieclam">
						<h2 class = 'bold_red'>

							<a href = "#">
								Trưởng phòng kế toán
							</a>

						</h2>

						<p>Công ty D</p>
					</div>-->

				</div>
			</div>
			<div class = "clear"></div>
			<!--ket thuc hien thi top dau -->
			<!--hien thi cong viec khac -->
			<div class = "other_job" >

			</div>
		</div>

	</div>
</div><!--center-->
<div id = "right">
	<div class = "box-right">
		<div class = "quangcao-company">
			<p><a href = "#" title = "http://vieclamviet.vn/index.php?option=com_content&view=article&id=59" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/qc_left1.jpg" width = "178" height = "115"></a></p>
			<p><a href = "#" title = "" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/qc_left2.jpg" width = "178" height = "115"></a></p>
			<p><a href = "#" title = "http://" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/qc_left3.jpg" width = "178" height = "115"></a></p>
			<p><a href = "#" title = "http://" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/qc_left4.jpg" width = "178" height = "115"></a></p>
			<p><a href = "#" title = "" target = "_blank"><img src = "<?php echo Yii::app()->theme->baseUrl; ?>/images/qc_left5.jpg" width = "178" height = "115"></a></p>
		</div>
		<div class = "clear"></div>
	</div>

	<div class = "clear"></div>
</div><!--right-->


<div id = "center2">

	<table class = "blog" cellpadding = "0" cellspacing = "0">
		<tr>
			<td valign = "top">
			</td>
		</tr>


	</table>

</div>

<div class="clear"></div>