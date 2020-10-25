<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="UTF-8">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="Description" content="Ecopark thanh pho xanh">
		
		<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eb10af481d25c0e5848dd58/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
		
		<?php wp_head(); ?>
		<?php if(get_option('origin-favicon')){ ?>
		<link rel="shortcut icon" href="<?php echo get_option('origin-favicon');?>" type="image/x-icon">
		<?php }?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.fancybox.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
	</head>
	<body <?php body_class($class); ?>>
		<?php if(!wp_is_mobile()){?>
		<header id="header">
			<div class="header_top">
				<div class="container">
					<ul class="list_info_top clearfix">
						<li><i class="fa fa-phone" aria-hidden="true"></i>Hotline: <a href="tel:<?php the_field('hotline','option') ?>"><?php the_field('hotline','option') ?></a></li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:<?php the_field('email','option') ?>"><?php the_field('email','option') ?></a></li>
					</ul>
				</div>
			</div>
			<div class="header_main head clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div class="logo">
								<a href="<?php bloginfo('home');?>" title="<?php bloginfo('title'); ?>"><img src="<?php the_field('logo','option') ?>" alt="<?php bloginfo('title');?>"/></a>
							</div>
						</div>
						<div class="col-md-10">
							<div class="header_menu clearfix">
								<ul class="menu_main clearfix">
									<?php  wp_nav_menu_no_ul(); ?>
									<li class="item-search">
										<div class="icon">
											<i class="fa fa-search" aria-hidden="true"></i>
										</div>
										
										<form role="search" action="<?php echo home_url( '/' ); ?>" method="get" class="searchform clearfix">
											<input type="text" name="s" class="search-input" placeholder="Tìm kiếm ...">
											<button type="submit" class="submit-input"><i class="fa fa-search" aria-hidden="true"></i></button>
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<?php
		}
		else
		{ ?>
		<div class="bg-red header-top "></div>
		<div class="header-mobile clearfix">
		    <div class="content-header clearfix">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-12">
		                    <div class="tbl">
		                        <div class="tbl-cell logo wow zoomIn">
		                            <a href="<?php bloginfo('home');?>" title="<?php bloginfo('title'); ?>"><img src="<?php the_field('logo','option') ?>" alt="<?php bloginfo('title');?>"/></a>
		                        </div>

		                        <div class="tbl-cell hotline">
		                            <a href="tel:<?php the_field('hotline','option')?>">
		                                <span class="text-hl ">Hotline:</span>
		                                <span class="color fw num-hl cl-red"><?php the_field('hotline','option')?></span>
		                            </a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div id="sticker-container" class="">
		        <div class="container">
		            <div class="row">
		                <div class="col-xs-12 col-sm-12">
		                    <div id="sticker">
		                        <div id="sticker-overlay"></div>
		                        <div id="sticker-wrapper">
		                            <div class="sticker-header">
		                                <div class="title">Danh mục</div>
		                                <div class="close-menu" id="btn-close-sticker"></div>
		                                
		                            </div>
		                            <div class="sticker-body menu-mb">
		                                <?php wp_nav_menu( array( 'container' => '','theme_location' => 'main','menu_class' => 'main-menu menu tbl' ) ); ?>  
		                            </div>
		                            <div class="sticker-footer">
		                                <div class="hotline">
		                                    <span>Hotline: </span>
		                                    <a href="tel:<?php the_field('hotline','option')?>"><?php the_field('hotline','option')?></a>
		                                </div>
		                                
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <span id="touch-menu">
		            <i class="touch-menu-inner"></i>
		        </span>
		    </div>
		</div>
		
		<?php }?>