// JavaScript Document
// Cookie control scripts 
// 25 Feb 2016

//jslint inline directives
/* exported setCookie */
/* exported getCookie */

function setCookie (cName, cValue, exSeconds) {
	"use strict";
	
	var expireDate = new Date();
	expireDate.setSeconds(expireDate.getSeconds() + exSeconds +60);
	
	var expires = "expires=" + expireDate.toGMTString();
	document.cookie = cName + "=" + cValue + "; " + expires;
}

function getCookie (cName) {
	"use strict";
	
	var name = cName + "=";
	var ca = document.cookie.split(';');
	
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		
		while (c.charAt(0) === ' '){
			c = c.substring(1);
		}
		
		if (c.indexOf(name) === 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}