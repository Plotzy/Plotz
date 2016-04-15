// JavaScript Document
// 25 Feb 2016

// hslint incline directives
/*global setCookie */

window.onload = initAll;

function initAll()
{
	"use strict";
	document.getElementById("leaveLink").onclick = writeUsernameCookie;
}

function writeUsernameCookie()
{
	"use strict";
	
	var userName = document.getElementById("txtBirthday").value;
	if (userName) {
		setCookie("username", userName, 60);}
		
		var userName1 = document.getElementById("txtAddress").value;
	if (userName1) {
		setCookie("username1", userName1, 60);
		
		var userName2 = document.getElementById("txtFavorite").value;
	if (userName2) {
		setCookie("username2", userName2, 60);
	}
}

}