$(function() {
	skin();

});

//网站换肤
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
	//当前<li>元素选中,去掉其他同辈<li>元素的选中
	$("#"+skinName).addClass("selected")
					.siblings().removeClass("selected");
	//设置不同皮肤
	$("#cssfile").attr("href","css/skin/"+ skinName +".css");
	$.cookie( "MyCssSkin" , skinName , { path: '/', expires: 10 });
}

