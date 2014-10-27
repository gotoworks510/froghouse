// remap jQuery to $
$(function(){
	$(window).bind("scroll", function(){
		if($(this).scrollTop() > 200){
			$(".pageTop").fadeIn();
		} else {
			$(".pageTop").fadeOut();
		}
	})
})

$(function(){
	// ページ内リンクをクリックすると
	$('a[href^=#]').click(function(){
		// スクロールスピード
		var speed = 500;
		// クリックしたリンク先を保存
		var href= $(this).attr("href");
		// クリックしたリンク先が#または空のときは
		var target = $(href == "#" || href == "" ? 'html' : href);
		// トップへ移動する
		var position = target.offset().top;
		// リンク先へスムーズに移動する
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});
});

$(function(){
	$(window).bind("scroll", function() {
	// ドキュメントの高さ
	scrollHeight = $(document).height();
	// ウィンドウの高さ+スクロールした高さ→ 現在のトップからの位置
	scrollPosition = $(window).height() + $(window).scrollTop();
	// フッターの高さ
	postHeight = $(".footContents").height();

	// スクロール位置がフッターまで来たら
	if ( scrollHeight - scrollPosition  <= postHeight + 220 ) {
		// ページトップリンクをフッターに固定
		$(".pageTop").css({"position":"absolute","bottom": "0px"});
	} else {
		// ページトップリンクを右下に固定
		$(".pageTop").css({"position":"fixed","bottom": "0px"});
		}
	});
});

/* trigger when page is ready */
$(document).ready(function (){

	// your functions go here

});


/* optional triggers

$(window).load(function() {

});

$(window).resize(function() {

});

*/