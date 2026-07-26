<?php get_header();?> 
<div id="content" class="page">

    <?php if(have_posts()): while(have_posts()):the_post(); ?><!-- ループ開始-->
        <div class="page_container">
            <?php the_content() ;?>
        </div>
<style>
.page_container{
                         max-width: 1000px;
                         margin:0 auto;
                         }
.page p {line-height: 2;}
.page h2{font-size: 24px;}
/*きっかけや苦労したところ*/
/*作業工程*/
.p_block{display: block;
              width: 90%;
}
.h_block{font-size: 24px;
}
.h_block_2{display: block;
              width: 70%;
             margin: 0px auto;
}
.group_left{
             width: 50%;
             margin-right: 10% !important;
}
.group_right{
             width: 50%;
             margin-left: 10% !important;
}
</style>
    <?php endwhile; endif;?><!-- /ループの終わり -->
    

</div>


<?php get_footer();?>
