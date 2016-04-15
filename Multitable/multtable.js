// JavaScript Document
//Exercise Multiplication Table- Jonathan Plotz
//Fully JSHint compliant

window.onload = initAll;

function initAll() 
{
	"use strict";
	drawInlineTable();	
	console.log("I finished the initAll function");
}

var drawInlineTable = function drawInlineTableF()
{
	"use strict";
	console.log("Inside of drawInlineTable");
	
	var row, col;
	var tableString;
	tableString = '<table border= "1" cellspacing= "0" cellpadding="5">';
	
	for (row = 1; row <= 10; row++)
	{
		if (row % 2 === 0) {
			tableString += '<tr class="evenRow">';
		} else {
			tableString += '<tr class="oddRow">';
		}
		
	    for (col = 1; col <= 10; col ++)
		{
			tableString += '<td width="25" align="right" id "r' + row + 'c' + col + '">' + row*col + '</td>';
		}
		tableString += '</tr>';
	}
	
	tableString += "</table>";
	
	document.getElementById("inlineTable").innerHTML = tableString;
	for (row = 1; row <= 10; row++)
	{
		for (col = 1; col <= 10; col ++)
		{
		
			document.getElementById('r' + row + 'c' + col).onclick = getCell;
		
		}
	}	
};

var getCell = function getCellF(evt)
{
	"use strict";
	
	var thisCell;
	
    if (evt) {
		 thisCell = evt.target; // All browser except IE.
	} else {
		 thisCell = window.event.srcElement; // for IE. 
	}
	
		document.getElementById("message").innerHTML = thisCell.id + " = " + document.getElementById(thisCell.id).innerHTML;
	
		
};

