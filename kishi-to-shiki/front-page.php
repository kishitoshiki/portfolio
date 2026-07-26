<?php get_header();?>
<section class="profile" id="profile">
	<div class="profile__animation">
    	<h2 class="profile__title fadein">Profile</h2>
		<div class="profile__title2 slide_before">Profile</div>
	</div>
    <h3 class="profile__name fadein">きし としき</h3>
    <div class="profile__self-image fadein"> <img src="<?php echo get_template_directory_uri(); ?>/assets/self-image2.png" alt=""> </div>
    <div class="profile__content fadein">
        <p class="profile__p">京都精華大学マンガ学部ストーリーマンガコース卒業。
            大学2年生の夏に就活セミナーでwebデザイナー向けの説明をたまたま目に止まり、そこから自分で調べ始め、Webデザイナーに興味を持ち、デザインの楽しさや難しさにハマりました。</p>
      </div>
    <!--かつてのプロフィールの下にあった写真

               
            </div>
            <div class="profile__image"> <img class="profile__image__coffee" src="<?php echo get_template_directory_uri(); ?>/assets/coffee@2x.jpg" alt=""> <img class="profile__image__cat" src="<?php echo get_template_directory_uri(); ?>/assets/cat@2x.jpg" alt=""> </div>-->
    <div class="profile_manga">
        <div class="profile_manga_content">
            <div class="profile_manga_left">
                <h3 class="fadein">マンガ家への願望</h3>
                <h4 class="fadein">〜 自分の物語を世に出したい!! 〜</h4>
                <p class="fadein">子供の頃から物語を考えるのが好きで、絵本を作ったり、フリーゲームを作ったりして、遊んでいました。そして高校二年生の時に、進路の相談を親から尋ねられた時に、前から気になっていたマンガを作ってみたくなって、マンガ家になることにしました。<br>
                    <br>
                    その後、絵の練習を始め、京都精華大学マンガ学部に入学し、マンガとしての作画技法、物語の組み立て方、マンガ業界の歴史などを勉強しました。</p>
            </div>
            <div class="profile_manga_right fadein"><!-- <img class="profile_manga_right_circles" src="<?php echo get_template_directory_uri(); ?>/assets/circles.png" alt="">--><img class="profile_manga_right_img1" src="<?php echo get_template_directory_uri(); ?>/assets/manga.png" alt="manga"> </div>
        </div>
        <div class="profile_manga_cat fadein"> <img class="profile_manga_cat_img" src="<?php echo get_template_directory_uri(); ?>/assets/cat@2x.jpg" alt=""> </div>
    </div>
    <div class="profile_designer fadein">
        <div class="profile_designer_content">
            <div class="profile_designer_left">
                <h3  class="fadein">Webデザイナーへの願望</h3>
                <h4  class="fadein">〜 社会で役に立つスキルを手に入れたい 〜</h4>
                <p  class="fadein">大学２回生の夏に就活セミナーが行われ、そこでWEBデザイナーの進路を選ぶ学生がいることを知り、興味を持ち、勉強を始めました。その時はまだ軽い気持ちで、マンガコースの関係でアナログの作業が多い授業なので、パソコンやITのスキルを身につけたい、といったぐらいでした。<br>
                    <br></p>
				<p class="fadein">
                    そして、漫画も描きつつも、独学でWebデザインやプログラミングの勉強を進めた。大学三回生の夏にはweb制作会社のアルバイトに入り、病院サイトの流し込み、論文集の作成と校正など、さまざまな業務経験しました。</p>
            </div>
            <div class="profile_designer_right fadein"> <img class="profile_designer_right_circles" src="<?php echo get_template_directory_uri(); ?>/assets/circles.png" alt=""><img class="profile_designer_right_img1" src="<?php echo get_template_directory_uri(); ?>/assets/designer.png" alt="manga"> </div>
        </div>
        <div class="profile_designer_coffee fadein"> <img class="profile_designer_coffee_img" src="<?php echo get_template_directory_uri(); ?>/assets/coffee.jpg" alt=""> </div>
    </div>
</section>
<section class="skill" id="skill">
	<div class="skill__animation">
    	<h2 class="skill__title fadein">Skill</h2>
		<div class="skill__title2 slide_before">Skill</div>
	</div>
    <div class="skill_list fadein">
        <div class="skill_content">
            <div class="skill_content__title">Webデザイン</div>
            <img class="skill_content_img" src="<?php echo get_template_directory_uri(); ?>/assets/skill-01.png" alt="webdesign">
            <p>HTML、CSS、jQuery、WordPress</p>
        </div>
        <div class="skill_content">
            <div class="skill_content__title">グラフィック<br>デザイン</div>
            <img class="skill_content_img" src="<?php echo get_template_directory_uri(); ?>/assets/skill-02.png" alt="graphic_design">
            <p>Illustrator、Photoshop、AdobeXD</p>
        </div>
        <div class="skill_content">
            <div class="skill_content__title">マンガアート</div>
            <img  class="skill_content_img" src="<?php echo get_template_directory_uri(); ?>/assets/skill-03.png" alt="comic_art">
            <p>CLIP STUDIO PAINT EX</p>
        </div>
    </div>
</section>
<section class="achive" id="achive">
	<div class="achive__animation">
		 <h2 class="achive__title fadein">Achivement</h2>
		<div class="achive__title2 slide_before">Achivement</div>
	</div>
    <div class="custom fadein">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
        <div class="matter_1">
            <a href="<?php echo get_permalink();?>">
            <div class="content">
                    <div class="content_p">
                        <ul>
                            <li class="content_genru"><?php echo get_post_meta($post->ID, 'genre',true); ?></li>
                            <li class="content_time"><?php echo get_post_meta($post->ID, 'time',true); ?></li>
                        </ul>
                    </div>
                    <img class="key-thumbnail" src="<?php echo CFS()->get('s_image');?>" alt="">
            </div>
            <div class="content_title"><span style="font-size: 12px; line-height: 1.7"><?php echo get_post_meta($post->ID, 'genre',true); ?></span><br><?php the_title(); ?></div>
                </a>
        </div>
        <?php endwhile; endif;?>
    </div>
</section>
<?php get_footer();?>
