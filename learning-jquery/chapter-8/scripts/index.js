$(function() {
	skin();

	slide_display_text();

	news_scroll();

	tree();

	slide_displsy_img();
});

// 网站换肤
function skin() {
	var $li = $("#skin li");
	$li.click(function() {
		switchSkin(this.id);
	});
	var cookie_skin = $.cookie("MyCssSkin");
	if (cookie_skin) {
		switchSkin(cookie_skin);
	}
}

function switchSkin(skinName) {
	// 当前<li>元素选中,去掉其他同辈<li>元素的选中
	$("#"+skinName).addClass("selected")
		.siblings().removeClass("selected");
	// 设置不同皮肤
	$("#cssfile").attr("href","css/skin/"+ skinName +".css");
	$.cookie( "MyCssSkin" , skinName , { path: '/', expires: 10 });
}


// 显示和隐藏最新动态
function slide_display_text() {
	// 点击h3显示或隐藏
	var content_h3 = $('#content h3');
	content_h3.toggle(function() {
		var $self = $(this);
		$self.next().stop().slideToggle('slow', function() {
			$self.parent().find('.module_up_down img')
			.attr("src","images/up.gif");
		})
	},function() {
		var $self = $(this);
		$self.next().stop().slideToggle('slow', function() {
			$self.parent().find('.module_up_down img')
			.attr("src","images/down.gif");
		})
	});

	// 点击图标显示或隐藏
	$(".module_up_down").toggle(function() {
		var $self = $(this);
		$self.prev().stop().slideToggle('slow', function() {
			$("img",$self).attr("src","images/up.gif");
		});
	},function() {
		var $self = $(this);
		$self.prev().stop().slideToggle('slow', function() {
			$("img",$self).attr("src","images/down.gif");
		});
	});
}

// 新闻滚动
function news_scroll() {
	var $this = $(".scrollNews");

	$this.hover(function() {
		clearInterval(scrollTimer);
	},function() {
		scrollTimer = setInterval(function() {
			scrollNews($this);
		}, 3000);
	}).trigger('mouseleave');

	function scrollNews(obj) {
		var $self = obj.find('ul:first');
		var li_height = $self.find('li:first').height();
		$self.animate({'margin-top' : -li_height + 'px'}, 'slow', function() {
			$self.css({marginTop:0}).find('li:first').appendTo($self);
		});
	}
}

// 产品数的展开和关闭
function tree() {
	var treeview = $('.m-treeview .m-expanded span');

	treeview.toggle(function() {
		$(this).next().stop(false,true).slideToggle('slow', function() {
			$(this).parent().attr("class","m-collapsed");
		});
	},function() {
		$(this).next().stop(false,true).slideToggle('slow', function() {
			$(this).parent().attr("class","m-expanded");
		});
	});
}

//滑动显示图片
function slide_displsy_img() {
	var len = $(".num > li").length;
	var index = 0;

	$(".num li").mouseover(function() {
		index = $(".num li").index(this);
		showImg(index);
	}).eq(0).mouseover();

	// 滑入停止动画，滑出开始动画
	$('.ad').hover(function() {
		clearInterval(adTimer);
	},function() {
		adTimer = setInterval(function() {
			showImg(index);
			index++;
			if (index == len) {
				index = 0;
			}
		} , 3000);
	}).trigger("mouseleave");

	// 通过控制top来显示不同的图片
	function showImg(index) {
		var adHeight = $(".content_right .ad").height();
		$(".slider").stop(true,false).animate({top : -adHeight * index}, 1000);
		$(".num li").removeClass("on").eq(index).addClass("on");
	}
}