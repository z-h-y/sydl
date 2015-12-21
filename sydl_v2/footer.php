<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>


<script src="http://img01.static.appgame.com/libs/jsCommon/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/index.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-loading.1.7.min.js"></script>
<!-- <script type="text/javascript" src="http://player.youku.com/jsapi"></script> -->
<script type="text/javascript" src="http://qzs.qq.com/tencentvideo_v1/js/tvp/tvp.player.js" charset='utf-8'></script>
<script src="http://h5.static.myappgame.com/common/WeixinApi.js"></script> 
<script>
WeixinApi.ready(function (Api) {
	// 分享的回调
	var wxCallbacks = {
		ready : function() {
			},
		cancel : function(resp) {
			},
		fail : function(resp) {
			},
		confirm : function(resp) {
			},
		all : function(resp) {
			}
		};
	Api.generalShare(wxData, wxCallbacks);
	Api.shareToFriend(wxData, wxCallbacks); 
	Api.shareToTimeline(wxData, wxCallbacks); 
	Api.shareToWeibo(wxData, wxCallbacks);
});
</script>
<?php if(is_single()) { ?>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<?php } ?>
<?php if(is_page()) { ?>
<script>
$(function(){
	var page_list = $(".list-xw"),
		all_page_num = parseInt(page_list.find(".all-pagenum").text()),
		next_page = $(".next-page"),
		previous_page = $(".previous-page"),
		first_page  = $(".first-page"),
		pagenum_list = $(".pagenum-list"),
		category = 1,
		last_page  = $(".last-page");
	$(".page-nav li").click(function(){
		$(this).addClass('current').siblings().removeClass('current');
		$(".s-body .list").eq($(this).index()).addClass('current').siblings().removeClass('current');
		switch($(this).index()) {
			case 0: page_list = $(".list-xw");category = 1;break;
			case 1: page_list = $(".list-gg");category = 1;break;
			case 2: page_list = $(".list-hd");category = 1;break;
			case 3: page_list = $(".list-gl");category = 1;break;
		}
		all_page_num = parseInt(page_list.find(".all-pagenum").text());
	});
	pagenum_list.click(function(){
		var thisIndex = parseInt($(this).text());
		moveToIndex(thisIndex);
		checkCurPage();
	});	
	next_page.click(function(){
		moveToIndex(parseInt(page_list.find(".cur-page").text())+1); 
		checkCurPage();
	});
	previous_page.click(function(){
		moveToIndex(parseInt(page_list.find(".cur-page").text())-1); 
		checkCurPage();
	});
	last_page.click(function(){
		moveToIndex(all_page_num); 
		checkCurPage();
	});
	first_page.click(function(){
		moveToIndex(1); 
		checkCurPage();
	});
	function moveToIndex(thisIndex) {
		var this_pagenum_list = page_list.find(".pagenum-list");
		if(all_page_num > 9) {
			if(thisIndex >= 5 && thisIndex <= all_page_num - 4) {
				this_pagenum_list.eq(4).addClass("cur-page").siblings(".pagenum-list").removeClass("cur-page");
				for(var i = 0; i < 9; i++) {
					this_pagenum_list.eq(i).text(thisIndex-4+i);
				}
			} else if(thisIndex < 5){
				for(var i = 0; i < 9; i++) {
					this_pagenum_list.eq(i).text(i+1);
				}
				this_pagenum_list.eq(thisIndex-1).addClass("cur-page").siblings(".pagenum-list").removeClass("cur-page");
			} else if(thisIndex > all_page_num - 4) {
				for(var i = 0; i < 9; i++) {
					this_pagenum_list.eq(i).text(all_page_num-8+i);
				}
				this_pagenum_list.eq(8+thisIndex-all_page_num).addClass("cur-page").siblings(".pagenum-list").removeClass("cur-page");
			}
		} else {
			this_pagenum_list.eq(thisIndex-1).addClass("cur-page").siblings(".pagenum-list").removeClass("cur-page");
		}
		page_list.find(".cur-pagenum").text(thisIndex);
	    $.ajax({
	      type:"POST",
	      url: location.href,
	      data: "category="+category+"&offset="+(thisIndex-1)*9,
	      success: function(data){page_list.find("ul").eq(0).html(data);}
	    });
	}
	function checkCurPage() {
		var cur_page = page_list.find(".cur-page");
		next_page = page_list.find(".next-page");
		previous_page = page_list.find(".previous-page");
		first_page  = page_list.find(".first-page");
		last_page  = page_list.find(".last-page");
		if(cur_page.text() == 1) {
			first_page.hide();
			previous_page.hide();
			last_page.show();
			next_page.show();
		} else if(cur_page.text() == all_page_num) {
			last_page.hide();
			next_page.hide();	
			first_page.show();
			previous_page.show();	
		} else {
			first_page.show();
			previous_page.show();	
			last_page.show();
			next_page.show();			
		}
	}
})
</script>
<?php } ?>
<div style="display:none">
<script src="http://img01.static.appgame.com/libs/jsCommon/analytics/appgame-analytics.js"></script>
</div>



<?php wp_footer(); ?>
</body>
</html>