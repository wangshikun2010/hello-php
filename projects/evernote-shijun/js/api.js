function API(_class, _method) {
	this._class = _class || 'notebooks';
	this._method = _method || 'index';
	this._baseUrl = 'api.php?';

	return this;
}

/**
 * Perform get request
 * @param  {object}   data     query param
 * @param  {Function} callback
 * @return {void}
 */
API.prototype.get = function(data, callback) {
	var callback = $.isFunction(callback) ? callback : function(){};
	$.ajax(this.url(data), {method: 'GET', dataType: 'json'})
		.done(function(response) {
			if (response && response.status) {
				callback(response.data)
			} else {
				console.log(response);
			}
		});

	return this;
}

/**
 * Perform post request
 * @param  {object}   data     form-data
 * @param  {Function} callback
 * @return {void}
 */
API.prototype.post = function(data, callback) {
	var callback = $.isFunction(callback) ? callback : function(){};
	$.ajax(this.url(), {method: 'POST', dataType: 'json'})
		.done(function(response) {
			if (response && response.status) {
				callback(response.data)
			} else {
				console.log(response);
			}
		});

	return this;
}

/**
 * Construct request url
 * @param  {object} params
 * @return {string}
 */
API.prototype.url = function(params) {
	var segments = [];
	var params = params || {};

	// append class and method
	params['class'] = this._class;
	params['method'] = this._method;

	// append user query string
	for (var key in params) {
		if (params.hasOwnProperty(key)) {
			segments.push(key + '=' + encodeURIComponent(params[key]));
		}
	}

	return this._baseUrl + segments.join('&');
}

