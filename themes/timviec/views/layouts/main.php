<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta charset="<?php echo Yii::app()->charset; ?>" />
		<meta name="language" content="en"/>
		<!-- blueprint CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
		<!--[if lt IE 8]>
		<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl;                   ?>/css/ie.css" media="screen, projection" />
		<![endif]-->
		<link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/icon-timviec.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />


		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	</head>
	
	<body>
		<div id="box_main">
			<div id="header">
				<div class="box_menu_dt">
					<div class="css_vldt_top">

						<!--<div class="dangtuyen_css">
							<p>Tổng số hồ sơ đang tìm việc:<span id="tshsdtv"></span></p></div>
						<div class="dangtuyen_css">
							<p>Tổng số việc làm đang tuyển dụng:<span id="tsvldtd"></span></p></div>-->


						<div class="menu-top" align="right">

							<ul>
								<?php
								$this->widget('zii.widgets.CMenu', array(
									'activeCssClass' => 'active',
									'activateParents' => true,
									'items' => array(
										array('label' => 'Liên hệ', 'url' => array('/site/contact')),
										array('label' => 'Lưu trang này', 'url' => array(''), 'linkOptions' => array(
												'confirm' => 'Bạn muốn lưu trang này!',
											)),
										array('label' => 'Nhà tuyển dụng đăng nhập', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
										array('label' => 'Người tìm việc đăng nhập', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
										array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
									),
								));
								?>


							</ul>

						</div>
					</div>
				</div>
				<div class = "clear"></div>
				<div class = "box_header">

					<div class = "clear"></div>
					<div class = "box_logo">
						<div class = "logos">
							<h1>
								<a href = "<?php echo Yii::app()->homeUrl; ?>" title = "">

								</a>
							</h1>
						</div>
						<div class = "qc_tops"><span>
								<embed height = "70" width = "425" type = "application/x-shockwave-flash" src = "<?php echo Yii::app()->theme->baseUrl; ?>/views/vd.swf" style = "" d = "mymovie" name = "mymovie" bgcolor = "#0E0F11" quality = "high" menu = "false" scale = "noscale" allowfullscreen = "true" wmode = "transparent">
							</span></div>
					</div>
					<div class = "clear"></div>
				</div>
				<div class = "clear"></div>
				<div class = "box_menu_top">
					<div class = "box_horizontalmenu">
						<div class = "horizontalmenu">
							<p class = "icon_home"></p>
							<ul style = "list-style-type: none;">
								<?php
								$this->widget('zii.widgets.CMenu', array(
									'items' => array(
										array('label' => 'Trang chủ', 'url' => array('/site/index')),
										array('label' => 'Người tìm việc', 'url' => array('/hosotimviec/indexntd')),
										array('label' => 'Nhà tuyển dụng', 'url' => array('/hosotimviec/indexntv')),
										
										//array('label' => 'Nhà tuyển dụng', 'url' => array('/hosotimviec')),
										array('label' => 'Cung ứng nhân sự', 'url' => array('#')),
									//array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
									),
								));
								?>

							</ul>

						</div>
						<div class="langua" align="right"><p><span>Ngôn ngữ:</span><span><a href="#">English</a></span></p></div>
					</div>
				</div>
			</div><!--header-->
			<div class="clear"></div>


			<?php echo $content; ?>



			<div class="clear"></div>

			<div id="news_footer">
				<div class="box_news_f">


					<div class="tvan_css">
						<h3> Tư vấn nghề nghiệp</h3>
						<div class="tuvannghe">
							<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/baytuyendungnew_135_98.jpg" alt="6 cách để xây dựng một công sở vững mạnh" title="6 cách để xây dựng một công sở vững mạnh" width="162" height="98" class ="ja-box-ct clearfix" />				
							<p class="title_news_tv"><a href="#">6 cách để xây dựng một công sở vững mạnh</a></p>
							<div class="news_tvnghe">
								<p> - Một môi trường làm việc vững mạnh là nền tảng cơ bản để công ty thành công trong mọi hoạt động, từ cung cấp dịch vụ tốt nhất cho khách hàng đến tận dụng tối đa năng suất của nhân viên</p>
								<div class="clear"></div>
								<p align="right" class="view_all_tv"><a href="#">Xem tất cả</a></p>
							</div>
						</div>
					</div>	


					<div class="tnghiem_css">
						<h3>Trắc nghiệm tình huống phỏng vấn và chia sẻ trải nghiệm</h3>
						<div class="tuvannghe">
							<img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/img_new2s_162_98.jpg" alt="Bí quyết viết hồ sơ xin việc trực tuyến hiệu quả " title="Bí quyết viết hồ sơ xin việc trực tuyến hiệu quả "   class ="ja-box-ct clearfix" /><p class="title_news_tv"><a href="#">Bí quyết viết hồ sơ xin việc trực tuyến hiệu quả ...</a></p>
							<p>Một trong những nhân tố giúp bạn trẻ thành công trong  việc chinh phục nhà tuyển dụng là cần phải chuẩn bị cho mình một bảng sơ yếu lý lịch</p> 
							<div class="clear"></div>
							<p align="right" class="view_all_tv"><a href="#">Xem tất cả</a></p>
						</div>
					</div>
				</div>

			</div><!--news_footer-->
			<div class="clear"></div>

			<div id="footer">
				<div class="box-footer">
					<div class="menu_footer">
						<ul class="menu">
							<?php
							$this->widget('zii.widgets.CMenu', array(
								'items' => array(
									array('label' => 'Trang chủ', 'url' => array('/site', 'view' => 'index')),
									array('label' => 'Tìm việc làm', 'url' => array('/hosotimviec/indexntd')),
									array('label' => 'Đăng hồ sơ', 'url' => array('/hosotimviec/create')),
									array('label' => 'Tài liệu biểu mẫu', 'url' => array('#')),
									array('label' => 'Nhật ký tìm việc', 'url' => array('/hosotimviec/myindex')),
									array('label' => 'Thỏa thuận sử dụng', 'url' => array('#')),
									array('label' => 'Quy định bảo mật', 'url' => array('#')),
									array('label' => 'Liên hệ', 'url' => array('/site/contact')),
								),
							));
							?>

						</ul>
					</div>
					<div class="clear"></div>
					<div align="center" class="copy_right">
						<p>Bản quyền © <?php echo date("Y"); ?> . <a href="#" title="Tuyển dụng">Tuyển dụng</a>, <a href="#" title="tìm việc làm">tìm việc làm.</a> Tel: 01647.313.460. Email: <a href="mailto:d13ht01@gmail.com">d13ht01@gmail.com</a></p>
					</div>
				</div>
			</div><!--footer-->
		</div><!--box_main-->

		<!--<script src="<?php // echo Yii::app()->theme->baseUrl;    ?>/js/bootstrap.min.js"></script>-->
	</body>
</html>
