<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name=”description” content=”デザイナーのきしとしきです。イラスト・マンガ・Webデザインなど様々な仕事をしています。” />
<meta charset="UTF-8">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico" id="favicon">
<title>きしとしき kishi_toshiki</title>
<?php wp_head(); ?>
</head>
<body>
<div class="wrap">
    <header id="header">
        <!-- ここから固定ページのヘッダー -->
		<?php if ( is_page() ) : ?>
			<div class="homepage">
<a href="<?php echo home_url();?>">HOME</a>
	</div>
        <!-- ここから投稿ページのヘッダー -->
        <?php elseif ( is_single() ) : ?>
        <div class="homepage">
<a href="<?php echo home_url();?>">HOME</a>
	</div>
<?php else: ?>
<div class="header-top">
            <ul class="header-top__ul">
				         <li class="header-top__profile"><a href="#profile">Profile</a></li>
                    <li class="header-top__skill"><a href="#skill">skill</a></li>
                    <li class="header-top__achive"><a href="#achive">Achivement</a></li>
                    <!--<li class="header-top__contact"><a href="<?php get_template_directory_uri();?>/contact/">Contact</a></li>-->
            </ul>
 </div>
 <div class="header-bottom">
            <div class="header-image"> <img class="header-image__img" src="<?php echo get_template_directory_uri(); ?>/assets/header-image_after.jpg" alt="ヘッダー画像" ><img class='header-image__img2' src='<?php echo get_template_directory_uri(); ?>/assets/header-image_after.jpg' alt='ヘッダー画像' > </div>
            <div class="header-bottom_kisi">
                <h1 class="header-bottom__title">KISHI TOSHIKI</h1>
                <div class="header-bottom__title_2"> KISHI TOSHIKI</div>
            </div>
        </div>
<?php endif; ?>
        
        </header>
      