<!DOCTYPE html>
<html lang="ru">
	<head>
	<title><?= bloginfo() ?></title>
	<meta charset="utf-8">
	<meta name = "format-detection" content = "telephone=no" />
	<link rel="icon" href="<?= get_template_directory_uri() ?>/images/favicon.ico">
	<link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/images/favicon.ico" />
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/form.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/thumbs.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/slider.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/touchTouch.css">
	<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/style.css">
	<script src="<?= get_template_directory_uri() ?>/js/jquery.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/jquery-migrate-1.2.1.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/script.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/superfish.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/sForm.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/TMForm.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/jquery.ui.totop.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/jquery.equalheights.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/jquery.easing.1.3.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/jquery.iosslider.min.js"></script>
	<script src="<?= get_template_directory_uri() ?>/js/touchTouch.jquery.js"></script>
	<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('.gallery a.gal').touchTouch();
			});
	</script>
	<!--[if lt IE 8]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
			<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
		</a>
	</div>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="<?= get_template_directory_uri() ?>/js/html5shiv.js"></script>
	<link rel="stylesheet" media="screen" href="<?= get_template_directory_uri() ?>/css/ie.css">
	<![endif]-->

	<?php wp_head(); ?>

	</head>
	<body <?php if(is_front_page()) body_class('page1'); ?> id="top">
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="/">
							<img src="<?= header_image() ?>" alt="Лого">
						</a>
					</h1>
					<div class="menu_block ">
						<a href="https://money.yandex.ru" class="donate">ПОЖЕРТВОВАТЬ</a>
						<div class="clear"></div>
						<?php
							wp_nav_menu(array (
								'theme_location'  => 'top',
								'container'		  => 'nav',
								'container_class' => 'horizontal-nav full-width horizontalNav-notprocessed',
								'menu_class'      => 'sf-menu'
								)
							);
						?>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>
