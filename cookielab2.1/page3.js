// JavaScript Document
// 25 Feb 2016

// jslint inline directives
/* global getCookie */

window.onload = initAll;

function initAll()
{
	"use strict";
	document.getElementById("txtBirthday").innerHTML = getCookie("username");
	document.getElementById("txtAddress").innerHTML = getCookie("username1");
	document.getElementById("txtFavorite").innerHTML = getCookie("username2");
}