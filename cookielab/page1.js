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
	
	var userName = document.getElementById("txtLogin").value;
	if (userName) {
		setCookie("username", userName, 60);
	}
}