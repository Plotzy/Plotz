// JavaScript Document
// 25 Feb 2016

// jslint inline directives
/* global getCookie */

window.onload = initAll;

function initAll()
{
	"use strict";
	document.getElementById("txtUsername").innerHTML = getCookie("username");
}