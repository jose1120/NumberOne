<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/css/flexslider.css" rel="stylesheet">
        <link href="assets/css/switcher.css" rel="stylesheet">
        <link href="assets/css/parallax_slider/style.css" rel="stylesheet">
        <noscript>
	        <link rel="stylesheet" type="text/css" href="assets/css/parallax_slider/nojs.css" />
        </noscript>
        <link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
        <link href="assets/css/social.css" rel="stylesheet"> 

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!--Start Main-wrapper-->
        <div class="main-wrapper">
    		<div class="headtop needhead">
        		<div class="action-banner-bg"></div>
        		<div class="action-banner-bg-top"></div>

        		<div class="nav-reaction">
            		<div class="navbar navbar-static-top">
                		<div class="navbar-inner">
                    		<div class="container">
                        		<a class="brand" href="#">
                            		<span>JOSE LUIS RAMIREZ</span>
                        		</a>
                        		<div id="main-nav">
                            		<div class="nav-collapse collapse">
                                		<div class="nav">
                                        		<?php html5blank_nav(); ?>
                                    		</div>
                            		</div><!--nav-collapse-->
                        		</div><!--main-nav-->
                    		</div><!--container-->
                		</div><!--navbar-inner-->
            		</div><!--navbar-->
        		</div><!--nav-reaction-->


				<!--slider start-->
				<div class="banner-rotator">
					<div id="da-slider" class="da-slider">
						<div class="da-slide">
							<h2>abc</h2>
							<p>abc</p>
							<span class="da-link">
								<a href="#">
									<span class="main-link"><i class="fa fa-tablet"></i> Available on market</span>
									<span class="arrow"> &rarr; </span>
								</a>
							</span>
							<div class="da-img visible-desktop"><img src=""></div>
						</div><!--da-slide-->

						<div class="da-slide">
							<h2>def</h2>
							<p>def</p>
							<span class="da-link">
								<a href="#">
									<span class="main-link"><i class="fa fa-tablet"></i> Available on market</span>
									<span class="arrow"> &rarr; </span>
								</a>
							</span>
							<div class="da-img visible-desktop"><img src=""></div>
						</div><!--da-slide-->

						<div class="da-slide">
							<h2>ghi</h2>
							<p>ghi</p>
							<span class="da-link">
								<a href="#">
									<span class="main-link"><i class="fa fa-tablet"></i> Available on market</span>
									<span class="arrow"> &rarr; </span>
								</a>
							</span>
							<div class="da-img visible-desktop"><img src=""></div>
						</div><!--da-slide-->

						<div class="da-arrows">
							<span class="da-arrows-prev"></span>
							<span class="da-arrows-next"></span>
						</div>
					</div><!--da-slider-->
				</div><!--banner-rotator-->

				<div class="top-soc hidden-phone">
					<div class="container">
						<div class="row">
							<ul class="social-top">
								<li>
									<a href="#">
										<i class="fa fa-facebook fa-fw" aria-hidden="true"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-twitter fa-fw"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-github fa-fw"></i>
									</a>
								</li>
							</ul>
						</div><!--row-->
					</div><!--container-->
				</div><!--top-soc-->
    		</div><!--end headtop-->



