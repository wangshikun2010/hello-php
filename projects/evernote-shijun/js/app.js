var notebooks;
var notes;
var note;

$(function() {
	var notebooks	= $('#notebooks');
	var notes		= $('#notes');
	var note		= $('#note');

	// load note detail when user clicks note snippet
	notes.find('li.note').click(function() {
		note.html($(this).find('.snippet').text());
	});
});