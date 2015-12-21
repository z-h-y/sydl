var slowtime = 20;
if (navigator.userAgent.toLowerCase().match(/MicroMessenger/i) == "micromessenger") { //微信
	slowtime = slowtime * 2;
}
var loadOptions = {
	container: ".main",
	slow: isPC ? false : true, //开启缓慢显示进度，默认 false
	maxWidth: 740,
	slowtime: slowtime, //缓慢显示进度的时间间隔，默认 50
	maxRadio: dr,
	minRadio: 1.44,
	radio: radio,
	setRem: isPC ? false : true,
	setWidth: isPC ? false : false,
	autoHeight: isPC ? false : false
};
var wxData = {
	appId: '', //appid，可不用这项
	imgUrl: 'images/logo.png', // 缩略图地址
	link: '', // 链接地址
	title: '', // 标题
	desc: '' // 详细描述
}
$(function() {
	var moveing = false;

	function touchHandlerDummy(e) {
		e.preventDefault();
		moveing = true;
		return false;
	}

	function touchHandlerStart(e) {
		moveing = false;
	}
	$(document).bind("touchstart", touchHandlerStart);
	$(document).bind("touchmove", touchHandlerDummy);
	var CLICK_EV = ("ontouchstart" in window) ? "touchend" : "click";
	if (isPC) {
	} else {
		$("body").loading({
			onload: function(pre) {
				$(".loading p i").text(pre);
			},
			complete: function(a) {
				$(".loading").hide();
			}
		});
	}


});

(function() {
	$.fn.extend({
		reAnimate: function() {
			return this.each(function() {
				$(this).css({
					display: "none",
					animationPlayState: "paused"
				});
			});
		},
		startAnimate: function() {
			return this.each(function() {
				$(this).attr("style", "");
				var display = $(this).css("display");
				var visibility = $(this).css("visibility");
				if (display == "none") {
					display = "block";
				}
				if (visibility == "hidden") {
					visibility = "visible";
				}
				$(this).css({
					display: display,
					visibility: visibility,
					animationPlayState: "running"
				});
			});
		}
	});
})(jQuery);