function Mochila(){
	this.initialized = false;
	this.apiKey = "";
	this.isAdmin = getCookie('isAdmin') ? getCookie('isAdmin') : false;

	return this;
}

function init(obj){
	if (obj !== undefined) {

		if (this.isAdmin) {
			this.masterKey = getCookie('access_token');
			this.initialized = true;
		} else {
			if (obj.apiKey == undefined) return false;

			this.apiKey = obj.apiKey;
			this.initialized = true;
		}

		return true;
	} else {
		this.initialized = false;
	}
}

function isInitialized() {
	if (this.initialized) {
		return true;
	} else {
		return false;
	}
}

function connect(params) {

	var method = "GET";
	var url = null;
	var data = null;

	if (!this.initialized) return false;

	if (params !== undefined) {
		if (method !== undefined) method = params.method;
		if (url == undefined) url = params.url;
		if (data == undefined) data = params.data;
	}

	console.log(params);

	if (typeof XMLHttpRequest == 'function') {
		var request = new XMLHttpRequest();
		request.open(method, url, true);
		request.onreadystatechange = function () {
		  if (request.readyState != 4 || request.status != 200) return;
		};
		request.send("banana=yellow");
	} 

	return true;
}

function getCookie(c_name) {
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	
	if (c_start == -1) {
		c_start = c_value.indexOf(c_name + "=");
	}
	if (c_start == -1) {
		c_value = null;
	}
	else {
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);

		if (c_end == -1) {
			c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start,c_end));
	}
	return c_value;
}

function setCookie(c_name,value,exdays) {
	var exdate=new Date();
	exdate.setDate(exdate.getDate() + exdays);
	var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
	document.cookie=c_name + "=" + c_value;
}

function deleteCookie(c_name) {

	document.cookie = c_name + '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';

	if ( !getCookie(c_name) ) return true;
	else return false;
}

function showModal( object ) {

	$(object).addClass('show').removeClass('hide');

}

function isAuthorized() {

	if ( getCookie('access_token') ) {
		
		return true;

	}

	return false;

}

Mochila.prototype.init = init;
Mochila.prototype.isInitialized = isInitialized;
Mochila.prototype.connect = connect;
Mochila.prototype.setCookie = setCookie;
Mochila.prototype.getCookie = getCookie;
Mochila.prototype.deleteCookie = deleteCookie;
Mochila.prototype.showModal = showModal;
Mochila.prototype.isAuthorized = isAuthorized;

window.mochila = new Mochila();


$('section').on( 'touchend', function(){

	// window.scrollTo(0, 1);

});

if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {

}

// $('html,body').css('height',screen.height);
// window.scrollTo(0, 1);