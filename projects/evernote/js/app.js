$(function() {
	var dialog = $('#modal-add-notebook'); //对话框
	var input = $('#notebook-name'); //输入框
	var mode = 'add'; //模式
	var notebook = null; //当前的笔记本
	var first_li = $('.notebook-item').html('
				<li class="notebook-item">
					<a href="" data-id="1">PHP</a>
					<span class="dropdown pull-right">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">管理<b class="caret"></b></a>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li><a class="edit-notebook" tabindex="-1" href="javascript:void(0)">编辑</a></li>
							<li><a class="delete-notebook" tabindex="-1" href="javascript:void(0)">删除</a></li>
						</ul>
					</span>
				</li>');
	// alert(first_li);
	// console.log(first_li);

	$('#add-notebook').click(function() {
		if ($('#notebook-list').is(':empty')) {
			first_li.appendTo('#notebook-list');
		}

		mode = 'add';
		dialog.find('h3').text('添加笔记本');
		//在窗口打开的时候将所有的出错消息删掉
		dialog.find('div.alert').remove();
		// $('div.alert', dialog).remove();
		dialog.modal('show');
	});

	$('#btn-add-notebook').click(function() {
		//在点击了添加按钮之后将出错的消息删掉
		dialog.find('div.alert').remove();
		var name = input.val();

		if (name !== '') {
			// 创建笔记本li
			if (mode === 'add') {
				$('#notebook-list li:eq(0)').clone(true)
					.find('a:eq(0)').text(name)
					.end()
					.appendTo('#notebook-list');
			} else {
				notebook.find('a:eq(0)').text(name);
			}
			input.val('');

			// 隐藏对话框
			dialog.modal('hide');
		} else {
			var alert = $('<div class="alert alert-error">笔记本名称不能为空</div>');
			alert.prependTo(dialog.find('.modal-body'));
		}
	});

	//编辑笔记本
	$('.edit-notebook').on('click', function() {
		mode = 'edit';
		notebook = $(this).parents('.notebook-item');

		dialog.find('h3').text('编辑笔记本');
		var name = notebook.find('a:eq(0)').text();
		input.val(name);
		// console.log($(this).parents('.notebook-item').find('a:eq(0)'));

		dialog.modal('show');
		return false;
	});

	//删除笔记本
	$('.delete-notebook').click(function() {
		$(this).parents('.notebook-item').remove();
	});
});
