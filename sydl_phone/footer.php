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
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<script src="http://h5.static.myappgame.com/common/WeixinApi.js"></script> 
<script>
var wxData = {
	appId: '', //appid，可不用这项
	imgUrl: 'images/logo.png', // 缩略图地址
	link: '', // 链接地址
	title: '', // 标题
	desc: '' // 详细描述
}
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
$("#content").css("min-height",window.innerHeight-100);
</script>
<?php if(is_home()) { ?>
<script type="text/javascript">
$(document).ready(function(){
	$(".slide-1, .bottom-btn, .arrow-next").addClass("ani");
});
var arrowTop = $(".arrow-top");
var arrowNext = $(".arrow-next");
var mySwiper = new Swiper ('.swiper-container', {
	direction : 'vertical',
	mousewheelControl : true,
	nextButton:'.arrow-next',
	onSlideChangeStart: function(swiper){
      $(".bottom-btn").removeClass("ani");
      arrowTop.removeClass("ani");
      arrowNext.removeClass("ani");
      $(".swiper-slide-active .inner-img").css("display","block");
      $(".swiper-slide-active .inner-img").css("display");
    },
	onTransitionEnd: function(swiper){
      $(".bottom-btn").addClass("ani");
      $(".swiper-slide-active").addClass("ani").siblings().removeClass("ani");
      if(mySwiper.isEnd) {
      	arrowTop.show().addClass("ani");
      } else {
      	arrowTop.hide();
      	arrowNext.addClass("ani");
      }
    }	  
});
arrowTop.click(function(){
	mySwiper.slideTo(0, 500, false);//切换到第一个slide，速度为1秒
	$(".slide-1, .bottom-btn, .arrow-next").addClass("ani");
	$(this).removeClass("ani").hide();
})  
</script>
<?php } ?>
<?php if(is_page()) { ?>
<script type="text/javascript">
var page_nav = $(".page-nav li");
var myPageSwiper = new Swiper ('.swiper-container', {
	mousewheelControl : true,
	pagination : '.page-bottom-nav', 
	onSlideChangeStart: function(swiper){
		$(".swiper-slide-active").css("height","auto").siblings().css("height",window.innerHeight-360+"px");
		page_nav.eq(myPageSwiper.activeIndex).addClass('current').siblings().removeClass('current');
	}
});
$(".swiper-slide").css("min-height",window.innerHeight-360+"px");
$(".swiper-slide-active").siblings().css("height",window.innerHeight-360+"px");
page_nav.click(function(){
	var index = $(this).index();
	myPageSwiper.slideTo(index, 500, false);//切换到第一个slide，速度为1秒
	$(this).addClass('current').siblings().removeClass('current');
	$(".swiper-slide-active").css("height","auto").siblings().css("height",window.innerHeight-360+"px");
});
$(document).ready(function(){
	var loading = false;
	var category= 1;
	var offset = 0;
	var current_list = $(".list-xw");
	$(window).scroll(function() {
		if ($(document).scrollTop() >= $(document).height() - $(window).height()-60 && !loading){
			loading = true;
			switch(myPageSwiper.activeIndex) {
				case 0:category= 1;offset=$(".list-xw li").length;current_list = $(".list-xw");break;
				case 1:category= 1;offset=$(".list-gg li").length;current_list = $(".list-gg");break;
				case 2:category= 1;offset=$(".list-hd li").length;current_list = $(".list-hd");break;
				case 3:category= 1;offset=$(".list-gl li").length;current_list = $(".list-gl");break;
			}
		    $.ajax({
		      type:"POST",
		      url: location.href,
		      data: "category="+category+"&offset="+offset,
		      success: function(html){current_list.append(html);loading = false;}
		    });
		}
	});
});
</script>
<?php } ?>
<div style="display:none">
<script src="http://img01.static.appgame.com/libs/jsCommon/analytics/appgame-analytics.js"></script>
</div>



<?php wp_footer(); ?>
</body>
</html>