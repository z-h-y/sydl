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
	setWidth: isPC ? false : true,
	autoHeight: isPC ? false : false
};
var wxData = {
	appId: '', //appid，可不用这项
	imgUrl: 'images/share.jpg', // 缩略图地址
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
	$(".line").bind(CLICK_EV, function(e) {
		if (!moveing) {
			if ($(this).hasClass("cur")) {
				$(this).removeClass("cur");
				$(".nav,.main_blur,.show_video").removeClass("cur");
				$("#playvideo").html("");
				$(".leaf,.leaf img").startAnimate();
			} else {
				$(this).addClass("cur");
				$(".nav,.main_blur").addClass("cur");
				$(".leaf,.leaf img").reAnimate();
			}
		}
	});
	if (isPC) {
		$(".long,.rm,.title").startAnimate();
		setTimeout(function() {
			$(".leaf,.leaf img,.s").startAnimate();
		}, 1500);
	} else {
		$("body").loading({
			onload: function(pre) {
				$(".loading p i").text(pre);
			},
			complete: function(a) {
				$(".loading").hide();
				$(".title").startAnimate();
				setTimeout(function() {
					$(".s").startAnimate();
				}, 500);
				setTimeout(function() {
					$(".leaf,.leaf img").startAnimate();
				}, 1000);
				if (!(userAgentInfo.indexOf('Android') > 0)) {
					$(".menu .ios").addClass("cur").siblings(".cur").removeClass("cur");
				}
			}
		});
	}

	$(".video").bind(CLICK_EV, function(e) {
		if (!moveing) {
			$(".show_video,.line,.main_blur").addClass("cur");
			$(".leaf,.leaf img").reAnimate();
			var t = $(this);
			var sid = t.attr("sid");
			var typeid = t.attr("typeid");
			var pic = t.attr("pic");
			if (sid && typeid) {
				show_video(typeid, sid, pic, true);
			}
		}
	});
	$(".close").bind(CLICK_EV, function(e) {
		if (!moveing) {
			$(".show_video").removeClass("cur");
			$("#playvideo").html("");
			$(".leaf,.leaf img").startAnimate();
		}
	});

	$("#header,.content-top,.content-news,.content-service,.present,.ss-item1,.s-ss-item,#center.content").addClass("ani");
	$('#video-btn').mouseover(function() {
		$(this).find('span').css({
			animationPlayState: "paused"
		});
	}).mouseout(function() {
		$(this).find('span').css({
			animationPlayState: "running"
		});
	});
	var index = 0;
	var items = $(".sydl-slide .ss-item");
	var len = items.length;
	//var autoChange = setInterval(autoChangeBg, 4000);

	function autoChangeBg() {
		if (index >= len - 1) {
			index = 0;
		} else {
			index++;
		}
		items.eq(index).css("display", "block");
		items.eq(index).css("display");
		items.eq(index).addClass("ani").siblings().removeClass('ani');
	}

	function changeBg(index) {
		items.eq(index).addClass("ani").siblings().removeClass('ani');
	}
	$(".sa-left").click(function() {
		clearInterval(autoChange);
		if (index == 0) {
			index = len - 1;
		} else {
			index--;
		}
		items.eq(index).css("display", "block");
		items.eq(index).css("display");
		changeBg(index);
		autoChange = setInterval(autoChangeBg, 4000);
	});
	$(".sa-right").click(function() {
		clearInterval(autoChange);
		if (index >= len - 1) {
			index = 0;
		} else {
			index++;
		}
		items.eq(index).css("display", "block");
		items.eq(index).css("display");
		changeBg(index);
		autoChange = setInterval(autoChangeBg, 4000);
	});
});

function show_video(type, vid, pic, autoplay) {
	if (type == "youku") {
		var player = new YKU.Player('playvideo', {
			styleid: '0', //炫彩播放器
			client_id: '1a0718786643b0ef', //优酷开放平台创建应用的client_id
			vid: vid, //视频ID
			show_related: false, //播放完成是否显示相关视频
			autoplay: autoplay, //是否自动播放视频
			password: '1a0718786643b0ef',
			embsig: 'playvideo' //嵌入式播放器签名(非网站类应用必须设置)
		});
	} else {
		var video = new tvp.VideoInfo();
		var width = $("#playvideo").width();
		var height = $("#playvideo").height();
		//向视频对象传入视频vid
		video.setVid(vid);
		var player = new tvp.Player(width, height);
		//设置播放器初始化时加载的视频
		player.setCurVideo(video);
		player.addParam('autoplay', autoplay ? 1 : 0);
		if (pic && pic != "undefined") {
			player.addParam('pic', pic);
		}
		player.addParam('showend', 0) //结束时是否有广告
		player.addParam("flashskin", "http://imgcache.qq.com/minivideo_v1/vd/res/skins/TencentPlayerMiniSkin.swf");
		player.addParam("loadingswf", "http://imgcache.qq.com/minivideo_v1/vd/res/skins/web_small_loading.swf");
		//输出播放器
		player.write('playvideo');
	}
};
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