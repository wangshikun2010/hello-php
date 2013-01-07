$(function() {
	skin();

	slide_display_text();

	news_scroll();

	tree();

	slide_displsy_img();

	imgSlide();
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

// 新款上市模块横向滚动
function imgSlide() {
	var page = 1;
	var page_size = 4;
	var len = $(".prolist_content ul li").length;
	var page_count = Math.ceil(len / page_size);
	var prolist_width = $(".prolist").width();
	var $parent = $(".prolist_content");

	// 向右按钮
	$(".goRight").click(function() {
		if(!$parent.is(":animated")) {
			if(page == page_count ){ //已经到最后一个版面了,如果再向后，必须跳转到第一个版面。
				$parent.animate({ left : 0}, 800);
				page = 1;
			} else {
				$parent.animate({ left : '-='+prolist_width}, 800);
				page++;
			}
		}
	});

	//往左按钮
	$(".goLeft").click(function() {
		if( !$parent.is(":animated") ) {
			if( page == 1 ){ //已经到第一个版面了,如果再向前，必须跳转到最后一个版面。
				$parent.animate({ left : '-='+prolist_width*(page_count-1)}, 800); //通过改变left值，跳转到最后一个版面
				page = page_count;
			} else {
				$parent.animate({ left : '+='+none_unit_width }, 800);
				page--;
			}
		}
	});
}