$(function() {
	$('#nav-list li').click(function() {
		$(this).attr('class','active').siblings('li')
		.removeAttr('class');
		// console.log($(this).parent().html());
		// return false;
	});

	$('#input-search').submit(function() {
		search_content();
		return false;
	});

	$('#search').click(function() {
		search_content();
		return false;
	});

	function search_content() {
		$('table').nextAll('#not-search').remove();

		var input = $('#appendedInputButton');
		var search_text = input.val();
		var display = $('table tbody tr td:eq(1)').filter(':contains('+search_text+')');
		// console.log(display.length);
		if (display.length > 0) {
			$('table tbody tr').hide()
			.filter(':contains('+search_text+')').show();
		} else {
			$('table tbody tr').hide();
			$('table').after('<div id="not-search">没有你所搜索的内容</div>');
		}
	}
});