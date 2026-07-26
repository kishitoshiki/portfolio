//全てのオブジェクトをフェードインさせる
jQuery(window).scroll(function(){
    var wh = window.innerHeight;
    var scrollPos = jQuery(window).scrollTop();
	
	//フェードインさせるオブジェクトを指定
	jQuery('.fadein').each(function(){
		//画面内のどの位置で処理を実行するかで「100」の値を変更
		var boxOffset = jQuery(this).offset().top;
		if(scrollPos > boxOffset - wh +250){
			jQuery(this).addClass('animated');
    }
  });
	//スライドインさせるオブジェクトを指定
	jQuery('.slide_before').each(function(){
		//画面内のどの位置で処理を実行するかで「100」の値を変更
		var boxOffset = jQuery(this).offset().top;
		if(scrollPos > boxOffset - wh + 250){
			jQuery(this).addClass('slide_after');
    }
  });
});


       
//タイトルのアニメーション

//kishitoshikiのアニメーションが横フェードインして、スライドする

//もしウィンドウのサイズが350px以上の時
var win = window.innerWidth;//画面の幅を変数winに代入

if (win >= 350) {
    jQuery(".header-bottom__title").css("visibility", "visible").hide().fadeIn(2000, function () {
        jQuery(this).animate({
            "margin-left": "40px"
        }, 1000);
    });

    jQuery(".header-bottom__title_2").css("visibility", "visible").hide().fadeIn(2000, function () {
        jQuery(this).animate({
            "margin-right": "40px"
        }, 1000);
    });
    jQuery(".header-bottom__title").after("<div class='title_border'></div>");
    jQuery(".title_border").animate({
        width: '100%'
    }, 2000);
} else {
    jQuery(".header-bottom__title").css("visibility", "visible").hide().fadeIn(2000, function () {
        jQuery(this).animate({
            "margin-left": "20px" //少ししかスライドしない
        }, 1000);
    });

    jQuery(".header-bottom__title_2").css("visibility", "visible").hide().fadeIn(2000, function () {
        jQuery(this).animate({
            "margin-right": "20px" //少ししかスライドしない
        }, 1000);
    });
    jQuery(".header-bottom__title").after("<div class='title_border'></div>");
    jQuery(".title_border").animate({
        width: '100%'
    }, 2000);
}
//真ん中の線を出現
//ヘッダー画像をスクロールし続ける

jQuery(function () {
		setInterval(function () {
        jQuery(".header-image__img").animate({
            marginLeft: -2550
        }, 20000, 'linear');
        jQuery(".header-image__img").animate({
            marginLeft: 0
        }, 0);

        //二枚目

        jQuery(".header-image__img2").animate({
            marginLeft: -2550
        }, 20000, 'linear');
        jQuery(".header-image__img2").animate({
            marginLeft: 0
        }, 0);
    }, 0);
});
	
    //一枚目


//メニューバーをホバーした際、日本語の文字が浮かぶアニメーション
var ho = ['.header-top__profile', '.header-top__skill', '.header-top__achive', '.header-top__contact'];


jQuery(ho[0]).hover(
    function () {
        jQuery(ho[0]).addClass("hover");
    },
    function () {
        jQuery(ho[0]).removeClass("hover");
    });

//複製
jQuery(ho[1]).hover(
    function () {
        jQuery(ho[1]).addClass("hover");
    },
    function () {
        jQuery(ho[1]).removeClass("hover");
    });

jQuery(ho[2]).hover(
    function () {
        jQuery(ho[2]).addClass("hover");
    },
    function () {
        jQuery(ho[2]).removeClass("hover");
    });

jQuery(ho[3]).hover(
    function () {
        jQuery(ho[3]).addClass("hover");
    },
    function () {
        jQuery(ho[3]).removeClass("hover");
    });


//内容の表示
var click = 0;
jQuery(function () {
    jQuery(".bottom").on("click", function () {

        if (click == 0) {
            jQuery(".bottom").addClass("__af");
            jQuery(".info__p").css("display","block");
            jQuery(".info__p").css("visibility", "visible");
            jQuery(".info__p").css("opacity","1");
            click =+ 1;
        }else{
            jQuery(".bottom").removeClass("__af");
            jQuery(".info__p").css("visibility", "hidden");
            jQuery(".info__p").css("opacity","0");
            jQuery(".info__p").css("display","none");
            click = 0;
        }
    });

});

/*
画面の中央だと表示、端だと非表示になるアニメーションを設定する。
*/
jQuery(function(){
	//オブジェクトをHTMLに追加する
	jQuery(".profile_manga_right").append('<div class="circle1"></div>');
	jQuery(".profile_manga_right").append('<div class="circle2"></div>');
	jQuery(".profile_manga_right").append('<div class="circle3"></div>');
	jQuery(".profile_manga_right").append('<div class="circle4"></div>');
});
jQuery(window).scroll(function(){//スクロールしている最中にアニメーションを開始
	var circle_ob = [".circle1",".circle2",".circle3",".circle4"];
	//誤：["'.circle1'", "'.circle2'", "'.circle3'", "'.circle4'",];
	var wh = window.innerHeight;// ブラウザの内側の高さ（画面全体の表示領域）を取得
    var scrollPos = jQuery(window).scrollTop();//スクロールバーの位置を取得/デバイスの高さ
	//配列circle_obの要素を一つづつ取得する
	jQuery(circle_ob).each(function(i, val){//引数valに繰り返し処理中の要素（配列AcrollPos）を取得。第一引数は番号、第二引数は中身
		var boxOffset = jQuery(val).offset().top;//各オブジェクトの高さ
		//画面の下から3分の１から３分２の間にオブジェクトのてっぺん座標が来た時
		if(boxOffset - scrollPos >= wh*1/3 && boxOffset - scrollPos <= wh*2/3){
			jQuery(val).addClass("circle_phase1").fadeIn(2000).addClass("circle_phase2").fadeOut(2000);
			//style.cssではopacityを「１」のままで、visibilityで表示非表示を操作する。
		}
	});
});


/*
jQuery(function(){
	//オブジェクトをHTMLに追加する
	jQuery(".profile_manga_right").append('<div class="circle1"></div>');
	jQuery(".profile_manga_right").append('<div class="circle2"></div>');
	jQuery(".profile_manga_right").append('<div class="circle3"></div>');
	jQuery(".profile_manga_right").append('<div class="circle4"></div>');
});
jQuery(window).scroll(function(){//スクロールしている最中にアニメーションを開始
	var circle_ob = [".circle1",".circle2",".circle3",".circle4"];
	//誤：["'.circle1'", "'.circle2'", "'.circle3'", "'.circle4'",];
	var wh = window.innerHeight;// ブラウザの内側の高さ（画面全体の表示領域）を取得
    var scrollPos = jQuery(window).scrollTop();//スクロールバーの位置を取得/デバイスの高さ
	//配列circle_obの要素を一つづつ取得する
	jQuery(circle_ob).each(function(i, val){//引数valに繰り返し処理中の要素（配列AcrollPos）を取得。第一引数は番号、第二引数は中身
		var boxOffset = jQuery(val).offset().top;//各オブジェクトの高さ
		//画面の下から3分の１から３分２の間にオブジェクトのてっぺん座標が来た時
		if(boxOffset - scrollPos >= wh*1/3 && boxOffset - scrollPos <= wh*2/3){
			jQuery(val).addClass("circle_phase1").delay(1900).queue(function(){
				jQuery(this).addClass("circle_phase2");//オブジェクトをフェイドイン・フェイドアウトする。
			});
		}
	});
});


jQuery(function(){
	//オブジェクトをHTMLに追加する
	jQuery(".profile_manga_right").append('<div class="circle1"></div>');
	jQuery(".profile_manga_right").append('<div class="circle2"></div>');
	jQuery(".profile_manga_right").append('<div class="circle3"></div>');
	jQuery(".profile_manga_right").append('<div class="circle4"></div>');
});
jQuery(window).scroll(function(){//スクロールしている最中にアニメーションを開始
	var circle_ob = [".circle1",".circle2",".circle3",".circle4"];
	//誤：["'.circle1'", "'.circle2'", "'.circle3'", "'.circle4'",];
	var wh = window.innerHeight;// ブラウザの内側の高さ（画面全体の表示領域）を取得
    var scrollPos = jQuery(window).scrollTop();//スクロールバーの位置を取得/デバイスの高さ
	//配列circle_obの要素を一つづつ取得する
	jQuery(circle_ob).each(function(i, val){//引数valに繰り返し処理中の要素（配列AcrollPos）を取得。第一引数は番号、第二引数は中身
		var boxOffset = jQuery(val).offset().top;//各オブジェクトの高さ
		//画面の下から3分の１から３分２の間にオブジェクトのてっぺん座標が来た時
		if(boxOffset - scrollPos >= wh*1/3 && boxOffset - scrollPos <= wh*2/3){
			jQuery(val).addClass("circle_phase1");//オブジェクトをフェイドイン
		//画面の上から3分の１の間にオブジェクトのてっぺん座標が来た時
		}else if(boxOffset - scrollPos >= 0 && boxOffset - scrollPos < wh*1/3){
			jQuery(val).addClass("circle_phase2");//オブジェクトをフェイドアウト
		}else{
			//オブジェクトを初期化
			jQuery(val).removeClass("circle_phase1");
			jQuery(val).removeClass("circle_phase2");
			jQuery(val).addClass("circle_phase_initial");
		}
	});
});
*/

/*
作品ギャラリーをホバーして作品情報を表示
*/
let achive = document.getElementById('achive');
let cp = achive.getElementsByClassName('content');//class="content"の要素を指定
    jQuery(cp).mouseenter(function(event) {//eventにホバーした要素を代入
    var object_parent = event.currentTarget;
    var object = jQuery(object_parent).children();
    jQuery(object[0]).fadeIn(100);
    jQuery(object[0]).css("display","block");
    jQuery(object[0]).css("color","#fff");
    jQuery(object[0]).addClass("gray");//全体を黒い透明で覆う
    }).mouseleave(function(event){//マウスを離した時
    var object_parent = event.currentTarget;
    var object = jQuery(object_parent).children();
    jQuery(object[0]).fadeOut(100);
    });

//ヘッダーのフェードイン
function dispHeader(){
jQuery('.header-image').css("visibility", "hidden");
jQuery('.header-top__ul').css("visibility", "hidden");
var first = function(){
  jQuery('.header-image').css("visibility", "visible").hide().fadeIn(2000);
  jQuery('.header-top__ul').css("visibility", "visible").hide().fadeIn(2000);
}
setTimeout(first, 2000);
}
window.onload = dispHeader;






