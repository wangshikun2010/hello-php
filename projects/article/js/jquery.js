$(function() {
	$('#nav-list li').click(function() {
		$(this).addClass('current').siblings('li')
		.removeClass('current');
	});

	$('#search').click(function() {
		var search_text = $('#appendedInputButton').val();
		var display = $('table tbody tr').filter(':contains('+search_text+')');
		// console.log(display.length);
		if (display.length > 0) {
			$('table tbody tr').hide()
			.filter(':contains('+search_text+')').show();
		} else {
			$('table tbody tr').hide();
			$('table').after('<div id="not-search">没有你所搜索的内容</div>');
		}
	});
})