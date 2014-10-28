<?php
/**
 * ヘッダー
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title><?php
	global $page, $paged;
	wp_title( '-', true, 'right' );
	bloginfo( 'name' );
	if ( $paged >= 2 || $page >= 2 )
	echo ' - ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?>
	<?php
        $summary = strip_tags($post->post_content);
        $summary = str_replace("n", "", $summary);
        $summary = mb_substr($summary, 0, 100). "…";
    ?>
	</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">
	<link rel="author" href="https://plus.google.com/113175824944481597556">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ie8.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slideshow.css">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="RSS 2.0">
	<link rel="alternate" type="application/atom+xml" href="<?php bloginfo('atom_url'); ?>" title="Atom cite contents">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon.png">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(unescape('%3Cscript src="<?php echo get_template_directory_uri(); ?>/library/js/libs/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
	<?php wp_deregister_script( 'jquery' ); ?>
	<?php wp_head(); ?>
	<?php if(is_single() || is_page()): ?>
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@vanboku">
	<meta name="twitter:creator" content="@vanboku">
	<meta name="twitter:domain" content="bokura.opdsgn.com">
	<meta name="twitter:url" content="<?php the_permalink() ?>">
	<meta name="twitter:title" content="<?php the_title_rss() ?>">
	<meta name="twitter:description" content="<?php echo $summary; ?>">
	<!--
	<rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
	         xmlns:trackback="http://madskills.com/public/xml/rss/module/trackback/"
	         xmlns:dc="http://purl.org/dc/elements/1.1/">
	<rdf:Description
	    rdf:about="<?php the_permalink() ?>"
	    dc:title="<?php the_title_rss() ?>"
	    dc:identifier="<?php the_permalink() ?>"
	    dc:description="<?php echo $summary; ?>"
	    dc:creator="バンクーバーな僕ら" />
	</rdf:RDF>
	-->
	<?php else : ?>
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@vanboku">
	<meta name="twitter:creator" content="@vanboku">
	<meta name="twitter:domain" content="bokura.opdsgn.com">
	<meta name="twitter:url" content="http://bokura.opdsgn.com/">
	<meta name="twitter:title" content="バンクーバーな僕ら">
	<meta name="twitter:description" content="バンクーバーな僕らはカナダのBC州にあるバンクーバーで、クリエイターやイラストレーター、保育士やビジネスマン等、様々な業種で生きている僕らの日常を描いた4コマ漫画サイトです。">
	<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/eyeImage.png">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/eyeImage.png">
	<?php endif ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24328833-3', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body <?php body_class(); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&appId=175138172625307&version=v2.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container" id="header">
	<header class="span_16 row">
	<h1><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 viewBox="271.8 342.5 83.3 74.4" enable-background="new 271.8 342.5 83.3 74.4" xml:space="preserve">
<g>
	<path fill="#2F2F2F" d="M325.6,406.1c-0.1,0.4-0.1,0.8,0.2,1.1c0.6,0.6,1.1-2.5,1.1-2.6C326.6,404.7,325.7,405.6,325.6,406.1z"/>
	<path fill="#2F2F2F" d="M320.6,398c0-0.1-0.1-0.2-0.2-0.2c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.3,0.1-0.4,0.2
		c-0.1,0.1-0.2,0.3-0.3,0.4c-0.1,0.2-0.2,0.4-0.2,0.6c-0.1,0.2-0.1,0.5-0.1,0.7c0,0.1,0,0.3,0,0.4c0,0.1,0.1,0.2,0.1,0.3
		c0.1,0.1,0.1,0.2,0.2,0.2c0.1,0.1,0.2,0.1,0.3,0.1c0.1,0,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.2,0.1-0.4,0.2-0.6
		c0-0.2,0.1-0.5,0.1-0.7c0-0.2,0-0.3,0-0.4C320.7,398.2,320.6,398.1,320.6,398z"/>
	<circle fill="#2F2F2F" cx="313.1" cy="368.2" r="3.4"/>
	<path fill="#2F2F2F" d="M313.4,342.5l-41.6,36h10.7v38.4h61.9v-38.4h10.7L313.4,342.5z M297.6,393.5c-1.9,0.4-3.9,0.6-5.6-0.3
		c-0.4-0.2-0.4-0.6-0.4-1c0.2-8.9,6.1-18.3,14.5-21.6c0.4-0.2,0.5-0.6,0.5-0.9c-0.1-0.5-0.2-1.1-0.2-1.7c0.1-3.7,3.2-6.7,6.9-6.6
		c3.1,0.1,5.7,2.3,6.4,5.2c0.1,0.5,0.5,0.7,0.8,0.7c1.6-0.1,6.3,0.7,10.4,1.8c0.3,0.1,0.6,0.4,0.6,1c-0.6,5-2.9,10.9-5.6,13
		c-0.4,0.3-0.2,0.7,0.1,0.9c2.6,1.7,5.1,4.6,6.1,7.7c0.1,0.3-0.3,0.4-0.4,0.4c-0.1-0.1-1.5-0.7-2-0.8c-0.3-0.1-0.4,0.1-0.4,0.2
		c0,0.1,0.3,2,0.3,2.2c0.1,0.3-0.2,0.4-0.4,0.3c-2.2-0.8-4.1-4.1-9-6.8c-3-1.6-6.5-2.4-9.8-1.6c-2.6,0.6-5,1.9-6.8,3.7
		C301.1,391.9,299.2,393.1,297.6,393.5z M331.5,401.1c-1.5,1.9-2.4,2-2.9,2.3s-0.6,3-0.8,3.7c-0.4,1.1-2,2.6-3.5,1.9
		c-1.3-0.6-1.7-1.9-0.8-3.3c1-1.6,3.1-2.6,3.3-2.8c0.2-0.2,0-1,0-1s-1,1.5-2.4,0.7c-1-0.5-1.2-1.6-0.8-3.7c0.1-0.3,0.1-0.5,0.2-0.8
		l-0.1,0.2c-1,0.1-1.2-0.4-1.3,0c0,0.4,0.1,0.8-0.2,2c-0.4,1.6-1.6,3-3.4,2.4c-1.4-0.4-1.6-2.5-1.5-3.6c-0.5,0.6-1.2,1.2-2.1,1
		c-1.2-0.3-0.7-1.1-1.2-1.1c-0.5,0-0.1,2.6-0.9,3.5c-0.8,0.9-1.9,0.2-2-0.3c-0.1-0.3-0.1-3,0-4.9c-0.6,0.1-1.4,0.1-2.2,0.2
		c-0.3,3.2-1.3,6.3-4,5.1c-0.9-0.4-1.4-2-1.4-2.7c0-0.5,1.5-0.5,1.7-0.3c0.4,0.5,0.3,1.2,0.8,0.5c0.3-0.4,0.6-1.4,0.8-2.5
		c-1.4,0-2.5,0-2.6-0.1c-0.3-0.3-0.9-1.1-0.6-1.3c0.6-0.4,2.1-0.5,3.6-0.6c0.2-1.1,0.3-2.2,0.4-3c-1.3,0.8-2.4,1.9-3.5,2.6
		c-0.3,0.2-0.8-0.1-0.6-0.5c0.3-0.9,4-5.7,8.4-6c5.6-0.4,8.3,2.9,8.6,3.5c0.3,0.5-1.8,2.3-2.5,1.7c-3.8-3.2-6.7-3.1-9-2.1
		c0,0.8,0.1,2.1,0,3.7c1.3,0,3.8,0,4.2,0.3c0.4,0.3,0,1.6,0,1.6c0.3-0.3,0.7-1.5,1.7-1.3c1.6,0.3,0.2,2.3,1.2,2.4
		c0.6,0.1,1.2-0.2,1.5-0.6c0.4-0.9,1.3-2.2,3-2.1c1.9,0.1,1.7,1.7,3.5,1.4c0.3,0,0.6-0.2,0.9-0.4c0.2-0.2,0.3-0.3,0.5-0.4l0,0l0,0
		c0.7-0.5,1.3-0.8,1.5-0.7c0.5,0,0.5,0.2,0.8,0.5c0.3,0.3,0.8-0.1,1.1,0.3c0.7,0.8-0.5,5.4-0.4,5.7c0,0.3,2-0.9,2.3-2.7
		c0.2-0.9,0.2-1.8-0.2-2.5c-0.4-0.7,2.4-2.5,2.5-1.8C333.4,396.7,333.3,398.9,331.5,401.1z"/>
	<path fill="#2F2F2F" d="M325.7,399c-0.2,0.4-0.2,1.1,0.2,1.4c0.2,0.1,0.9,0,1.2-0.6c0.1-0.3,0.4-1.4,0.3-2.3
		C326.9,397.5,326.2,397.8,325.7,399z"/>
</g>
</svg></h1>
<ul>
	<li><a href="#about">ABOUT</a></li>
	<li><a href="#working">PROJECTS</a></li>
	<li><a href="#member">TENANTS</a></li>
	<li><a href="#rent">OCCUPANCY</a></li>
	<li><a href="#access">ACCESS</a></li>
</ul>
</header>
</div>
<!-- /.container -->