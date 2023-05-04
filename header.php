<?
	$page_url = get_the_permalink();
	$top_header_text = get_field('top_header_text', 'option');
	$menu_list = get_field('header_menu_list', 'option');
	$body_id = isset($args['body_id']) ? $args['body_id'] : '';
	$body_class = isset($args['body_class']) ? $args['body_class'] : '';
	$header_class = isset($args['header_class']) ? $args['header_class'] : '';
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="description" content="<? is_front_page() ? bloginfo('name') : wp_title(''); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<title><? is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
	<link rel="shortcut icon" href="<?=bloginfo('template_url');?>/assets/img/favicon.ico" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@300;400;500;600&family=Montserrat:wght@300;400;500;600&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/bootstrap-5.0.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/slick/slick.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/slick/slick-theme.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/appleple-modal-video/css/modal-video.min.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/jquery-nice-select-1.1.0/css/style.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/animation-wait-me/waitMe.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/main.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/components/marquee.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/components/header.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/components/footer.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/components/quote-box.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/components/dark-block-box.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/components/img-bg-box.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/components/brand-we-helped.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/components/brand-average-degree.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/components/white-newsletter-form.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/components/post-thumb-gallery.css">

	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/home.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/ripped-background.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/conversion-newsletter.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/case-studies.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/cro.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/design-development.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/blog-post.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/blog-home.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/cro-winners.css">
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/newsletter-confirmation.css">
	<!-- <link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/css/pixel.css?ver=1"> -->
	<link rel="stylesheet" href="<?=bloginfo('template_url');?>/assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<? wp_head(); ?>

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window, document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '935976649791078');
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=935976649791078&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->

		<!-- Facebook Pixel Code [DUPLICATE] -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '2766989046867023');
			fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
			src="https://www.facebook.com/tr?id=2766989046867023&ev=PageView&noscript=1"
		/></noscript>
	<!-- End Facebook Pixel Code [DUPLICATE] -->

	<meta name="blogcatalog" content="9BC10972940" />
	<meta name="google-site-verification" content="mVTSu6fxqz_sh1mABb5yCI8F-m7-CI8mAi4ekRaFTgs" />
	<script type="text/javascript" charset="utf-8">var ju_num="8B388611-029F-400E-9E9C-6A4516BB7A7A";var asset_host=(("https:"==document.location.protocol)?"https":"http")+'://cdn.justuno.com/';(function() {var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=asset_host+'coupon_code1.js';var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);})();</script>
	<!-- ManyChat -->
	<!-- <script type="text/javascript" async="async" src="//widget.manychat.com/368231686957124.js" async="async"></script> -->
	<script data-cfasync="false">window.ju_num="8B388611-029F-400E-9E9C-6A4516BB7A7A";window.asset_host='//cdn.jst.ai/';(function(i,s,o,g,r,a,m){i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)};a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script',asset_host+'vck.js','juapp');</script>
</head>

<body id="<?=$body_id?>" <?php body_class(isset($body_class) ? $body_class : ''); ?>>
<div class="header-section">
	<div id="top-header">
		<div class="d-none d-sm-block">
			<p class="sm-content text-center sm-content"><?=$top_header_text?></p>
		</div>
		<div class="d-xs-block d-sm-none">
			<div class="marquee-wrap">
				<div class="marquee marquee_hoverpause" style="--duration: 100s;   transform: skewY(-0deg);">
					<div class="marquee__group">
						<p class="sm-content text-center sm-content"><?=$top_header_text?></p>
						<p class="sm-content text-center sm-content" aria-hidden="true"><?=$top_header_text?></p>
						<p class="sm-content text-center sm-content" aria-hidden="true"><?=$top_header_text?></p>
					</div>
					
					<div aria-hidden="true" class="marquee__group">
						<p class="sm-content text-center sm-content"><?=$top_header_text?></p>
						<p class="sm-content text-center sm-content"><?=$top_header_text?></p>
						<p class="sm-content text-center sm-content"><?=$top_header_text?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header id="main_header" class="<?=$header_class?> <?php echo is_front_page() ? 'home' : '' ?>">
		<div class="header-bg">
			<div class="header-top-left-bg"></div>
			<div class="header-cross-line-bg"></div>
		</div>
		<div class="header-main">
			<div class="container-flued">
				<div class="main-header-inner">
					<div class="menu d-flex justify-content-between">
						<div class="logo">
							<div class="logo-icon">
								<a href="<?=get_full_url( '/' )?>" data-c="bluestout-logo" aria-label="bluestout-logo">
									<? if(is_front_page()) { ?>
										<div class="non-scrolled"><?get_template_part('assets/img/logo/logo-white');?></div>
										<div class="scrolled"><?get_template_part('assets/img/logo/logo-dark');?></div>
									<? } else { ?>
										<div class=""><?get_template_part('assets/img/logo/logo-dark');?></div>
									<? } ?>
								</a>
							</div>
						</div>
						<nav class="nav-menu navbar navbar-expand-sm navbar-light">
							<ul class="navbar-nav">
								<? if($menu_list) {
									foreach($menu_list as $menu_index => $menu_item) {
										$submenu = isset($menu_item['menu_dropdown']) ? $menu_item['menu_dropdown'] : ''; 
										echo '<li class="nav-item '.($submenu?'dropdown':'').' d-none d-md-block">';
										$menu_link = $menu_item['menu_link'] == ''  ? 'javascript:;' : get_full_url($menu_item['menu_link']);
										?>
										<a href="<? echo $menu_link?>" class="nav-link smd-content <? echo $submenu ? "hover-toggle" : "" ?>" role="button">
											<? echo $menu_item['menu_link_text'] ?>
										</a>
										<? if(isset($submenu)) { ?>
											<div class="hover-menu">
												<ul class="hover-menu-content">
													<? foreach($submenu as $key => $submenu_item) { ?>
														<li>
															<a class="hover-item xs-content" <? echo $submenu_item['submenu_new_tab'] ? 'target="blank"' : '' ?> href="<?=get_full_url($submenu_item['submenu_link'])?>">
																	<div class="d-flex">
																			<div class="image"><img src="<?=$submenu_item['submenu_icon']?>"></div>
																			<div class="content">
																					<p class="title smd-content"><?=$submenu_item['submenu_title']?></p>
																					<p><?=$submenu_item['submenu_text']?></p>
																			</div>
																	</div>
															</a>
													</li>
													<? } ?>
													<? if($menu_index == 0) { ?>
														<div class="trusted-text-wrapper text-center">
															<p class="trusted-text xsx-content">TRUSTED PARTER OF &nbsp; <img src="<?=bloginfo('template_url');?>/assets/img/logo/logo-shopify-dark.png" alt="Shopify"></p>
														</div>
													<? } ?>
												</ul>
											</div>
										<? }
										echo '</li>';
									}
								}
								?>
								<li class="hidden-xs nav-item btn-book-call dark-button-hover">
										<a href="<?=get_field('book_a_call_link', 'option')?>" target="blank" class="nav-link smd-content"> <?=get_field('book_a_call_text', 'option')?> </a>
								</li>
								<li class="mobile-menu-toggle d-sm-block d-md-none">
									<a href="javascript:;" class="nav-link smd-content menu-open icon-white"> <img src="<?=bloginfo( 'template_url' );?>/assets/img/menu-bar-white.svg" alt="="/> </a>
									<a href="javascript:;" class="nav-link smd-content menu-close icon-white"> <img src="<?=bloginfo( 'template_url' );?>/assets/img/menu-close-white.svg" alt="="/> </a>
									<a href="javascript:;" class="nav-link smd-content menu-open icon-dark"> <img src="<?=bloginfo( 'template_url' );?>/assets/img/menu-bar-dark.svg" alt="X"/> </a>
									<a href="javascript:;" class="nav-link smd-content menu-close icon-dark"> <img src="<?=bloginfo( 'template_url' );?>/assets/img/menu-close-dark.svg" alt="X"/> </a>
								</li>
							</ul>
						</nav>
						<ul class="mobile-menu">
							<?
								foreach($menu_list as $menu_index => $menu_item) {
									$submenu = isset($menu_item['menu_dropdown']) ? $menu_item['menu_dropdown'] : ''; 
									echo '<li class="mobile-menu-item>';
									?>
									<a href="<?=($menu_link==''?'javascript:;':$menu_link)?>" class="smd-content"><?=$menu_item['menu_link_text']?></a>
									<? if(isset($submenu)) { ?>
										<div class="sub-menu">
											<ul class="sub-menu-content">
												<? foreach($submenu as $key => $submenu_item) { if($menu_index == 2 && strpos($submenu_item['submenu_link'], 'cro-winners') !== false) continue; ?>
													<li class="sub-menu-item">
														<a class="xs-content white-button-hover" href="<?=$submenu_item['submenu_link']?>">
																<div class="sub-menu-item-content d-flex">
																	<div class="image"><img src="<?=$submenu_item['submenu_icon']?>" alt="menu logo"></div>
																	<div class="content">
																			<p class="title smd-content"><?=$submenu_item['submenu_title']?></p>
																	</div>
																</div>
														</a>
												</li>
												<? } ?>
											</ul>
										</div>
									<? }
									echo '</li>';
								}
							?>
								<li class="trusted-text-wrapper text-center">
									<p class="trusted-text xsx-content">TRUSTED PARTER OF &nbsp; <img src="<?=bloginfo('template_url');?>/assets/img/logo/logo-shopify-dark.png" alt="Shopify"></p>
								</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
</div>