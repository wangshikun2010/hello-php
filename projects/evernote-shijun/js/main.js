/**
 * On dom ready
 */
$(function() {
	// node elements handle
	var notebooks	= $('#cats');
	var tags		= $('#tags');
	var snippets	= $('#snippets ul');
	var detail		= $('#detail');

	// precompile templates
	var templates = {
		notebook: Handlebars.compile($('#notebook-template').html()),
		snippet: Handlebars.compile($('#snippet-template').html()),
		tag: Handlebars.compile($('#tag-template').html()),
		detail: Handlebars.compile($('#detail-template').html())
	};

	// load notebook lists
	var api = new API('notebooks', 'index');
	api.get({limit: 10}, function(items) {
		for (var i = 0; i < items.length; i++) {
			notebooks.append(templates.notebook(items[i]));
		}
		$('li.notebook:first').trigger('click');
	});

	// load note snippets
	$('li.notebook').live('click', function() {
		$('li.notebook').removeClass('active');
		$(this).addClass('active');

		var api = new API('notes', 'snippets');
		api.get({notebook: $(this).attr('data-id')}, function(items) {
			snippets.empty();
			for (var i = 0; i < items.length; i++) {
				snippets.append(templates.snippet(items[i]));
			};
			$('li.snippet:first').trigger('click');
		});

		// console.log('get note snippets for ' + $(this).attr('data-id'));
	});

	// load note detail when user clicks note snippet
	$('li.snippet').live('click', function() {
		$('li.snippet').removeClass('active');
		$(this).addClass('active');

		var notebook = $('li.notebook.active').attr('data-id');
		var api = new API('notes', 'detail');
		api.get({note: $(this).attr('data-id'), notebook: notebook}, function(item) {
			detail.html(templates.detail(item));
		});
	});
});