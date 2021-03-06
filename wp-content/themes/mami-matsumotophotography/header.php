<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="MAMI MATSUMOTO PHOTOGRAPHYはフォトグラファーmami matsumotoのポートフォリオサイトです。">
    <meta name="keywords" content="ポートフォリオ, フォトグラファー, ギャラリー, 旅, 写真,  mami">

<!-- ファビコン-->
<link rel="shortcut icon" href="https://mami-matsumoto.com/mamepress/wp-content/uploads/2019/10/favicon.ico">

<!-- リセットCSS-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" type="text/css" media="screen">

	<!-- スタイルシートの読み込み -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen">
    
	<!--スライダー-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.maximage.min.css" type="text/css" media="screen">

	<!-- ポップアップスタイルシートの読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" type="text/css" />





<!-- 	リセットCSS-->
	<!-- <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">  -->
    
	
	<!-- フォントオーサム読み込み -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



    <?php wp_head() ?>





</head>






<body>

<!--loading-->






<!--headerここから-->
 <header id="top-head">
    <div class="inner">
        <div id="mobile-head">
            <h1 class="logo"><a href="<?php echo home_url(); ?>"><div></div></a></h1>
            <div id="nav-toggle">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div id="top-nav">
            <nav id="global-nav" class="nav-box">
               <?php wp_nav_menu(); ?>
            </nav>
            <div class="sns_box nav-box">
                <div class="sns_button twitter">
                    <a href="https://twitter.com/omame_creator" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a>
                 </div> 
                <div class="sns_button facebook">
                    <a href="https://www.facebook.com/omame.creator" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
                </div> 
                <div class="sns_button instagram">
                    <a href="https://www.instagram.com/omame_creator" target="_blank"  title="Instagram"><i class="fa fa-instagram"></i></a>
                </div> 
            </div>
        </div>
    </div>
</header>

  <!--headerここまで-->
  


