$(function() {
	$('#nav-list li').click(function() {
		$(this).attr('class','active').siblings('li').removeAttr('class');
	});

	$('#search-form').submit(function() {
		search_content();
		return false;
	});

	function search_content() {
		$('table').nextAll('#not-search').remove();

		var input = $('#keyword');
		var keyword = input.val().toUpperCase();
		var rows = $('table tbody tr');

		input.val('');

		rows.each(function() {
			var row = $(this);
			var title = row.find('td:eq(1)').text().toUpperCase();

			if (title.indexOf(keyword) !== -1) {
				row.show();
			} else {
				row.hide();
			}
		});

		if ($('table tr:visible').length < 1) {
			$('table').after('<div id="not-search">没有你所搜索的内容</div>');
		}
	}
});