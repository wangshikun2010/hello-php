/**
 * On dom ready
 */
$(function() {
	// node elements handle
	var notebooks	= $('#cats');
	var tags		= $('#tags');
	var snippets	= $('#snippets');
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
	});

	// load note detail when user clicks note snippet
	snippets.find('li.note').click(function() {
		detail.html($(this).find('.snippet').text());
	});
});