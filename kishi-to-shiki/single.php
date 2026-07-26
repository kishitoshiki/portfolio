<?php get_header();?>
<div id="content" class="page">
    <?php if(have_posts()): while(have_posts()):the_post(); ?>
    <!-- ループ開始-->
    <div class="page_container">
        <?php the_content() ;?>
    </div>
    <?php endwhile; endif;?>
    <!-- /ループの終わり -->
    
    <style>
.border{border: solid #666 2px}
.page p {line-height: 1.7;}
.page h2{font-size: 24px;}
    /*目次*/
    .mokuzi{
        width: 50%;
        margin:0px auto;
        border-top:solid 1px #707070;
        border-bottom:solid 1px #707070;
        }
    }
    .works p{
        line-height: 2.5;
    }  
    .works a:hover{
        color:#BABABA;
    }
    
    .sagyou p{
        line-height: 2.5;
    }
    .sagyou a:hover{
        color:#BABABA;
    }
    
    .mokuzi li{
        list-style:none;
        line-height: 2.5;
        position:relative;
    }
    .mokuzi-contents{
        margin-left: 30px;
        line-hieght: 1.5;
    }
    .sagyou_child{
     margin-left: 20px;   
    }
    .mokuzi li::before{
        content: '';
        display: block;
        width:15px;
        height:15px;
        position:absolute;
        top:12px;
        left: -20px;
        background-color: #707070;
        clip-path: polygon(50% 0, 100% 50%, 50% 100%, 0 50%);
    }
    .mokuzi_h2{
        text-align:center;
        font-size: 32px;
        margin-top: 12px;
    }
    .mokuzi-contents{
        width: 70%;
        margin: 0px auto;
        padding: 10px;
    }

.page_container{
         max-width: 1000px;
         margin:0 auto;
                         }

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
.homepage{
        display: block;
        text-align: center;
        padding: 30px;
    }
.column_1{
	width: 90%;
	margin: 0px auto
}
@media(max-width: 820px){
.mokuzi{width: 100%;}
.column_1{
	flex-wrap: wrap !important;
	margin-bottom: 50px;
}
.group_left {
        width: 80%;
        margin-left: 10% !important;
    }
.group_right{width: 90%;}
.column_revarse{
flex-direction: column-reverse;
    }
    
    
}
</style>
</div>
<?php get_footer();?>
