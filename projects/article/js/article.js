$(function() {
	$('#nav-list li').click(function() {
		$(this).attr('class','active').siblings('li')
		.removeAttr('class');
		// console.log($(this).parent().html());
		// return false;
	});

	$('#search-form').submit(function() {
		search_content();
		return false;
	});

	$('#search-button').click(function() {
		search_content();
		return false;
	});

	function search_content() {
		$('table').nextAll('#not-search').remove();

		var input = $('#keyword');
		var search_text = input.val();
		var selected_tr = $('table tbody tr');
		// console.log(display.length);
		var index_text = search_text.toUpperCase();
		// console.log(index_text);

		input.val('');

		selected_tr.each(function() {
			var $self = $(this);
			var text_1 = $self.find('td:eq(1)').text();
			// console.log(text_1.toUpperCase());
			text_1.toUpperCase();

			if (text_1.indexOf(index_text) !== -1) {
				$self.show();
			} else {
				$self.hide();
				if ($self.length < 1) {
					$('table').after('<div id="not-search">没有你所搜索的内容</div>');
				}
			}
		});
	}
});