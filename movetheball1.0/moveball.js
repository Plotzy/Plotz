// JavaScript Document
// Exercise Move the Ball - Jonathan Plotz
var myBallObj; 
window.onload = initAll;

function initAll()
{
	"use strict";
	console.log("here 1");
	myBallObj=document.getElementById("ball"); //Get the object
	myBallObj.style.top = "200px"; //Set the starting point 
	myBallObj.style.left = "100px";
	console.log("here 2");
	console.log("Buttons working 1");
	document.getElementById("btnUp").onclick = moveBall;
	document.getElementById("btnDown").onclick = moveBall;
	document.getElementById("btnRight").onclick= moveBall;
	document.getElementById("btnLeft").onclick= moveBall; 
	console.log("Buttons working 2");
	
	console.log("hi 3");
	document.getElementById("btnChangeBall").onclick = changeBallChar;
	console.log("hi 4");
	
	document.onkeydown = keyHit;
}

function moveBall()
{
	"use strict";
	var y = parseInt(myBallObj.style.top); // Read the current position from the top.
	var x = parseInt(myBallObj.style.left);
	switch(this.id)
	{
		case "btnUp":		y -= 5; break;
		case "btnDown": 	y += 5; break;
		case "btnRight":    x += 5; break;
		case "btnLeft":     x -= 5; break;
		
		default: alert("Error - default in function moveBall");
	}
	
	console.log("oops 1");
	myBallObj.style.top = y + "px";  // Set the new position in the Y.  //This is the end of Devopment for button movement! Awesome.
	myBallObj.style.left = x + "px"; 
	console.log("oops 2");

}
console.log("Wow 1");
function changeBallChar()
{
	"use strict";
	console.log("Working 1");
	var answer = prompt ("What character do you want for the ball?", " ;) we are starting");
	
    if (answer)myBallObj.innerHTML = answer;
	
}
function keyHit(event)
{
	"use strict";
	if(event) {
		var thisKey = event.which;
	}   else {
	var thisKey = window.event.keyCode;
	}
    
	document.getElementById("lblKeyPressed").innerHTML = thisKey;
	 

	var y = parseInt(myBallObj.style.top); // Read the current position from the top.
	var x = parseInt(myBallObj.style.left);
	switch(thisKey)
	{
		case 38:		    y -= 5; break;
		case 40: 	        y += 5; break;	
		case 39:            x += 5; break;
		case 37:            x -= 5; break;
		
		default: alert("Error - default in function KeyHit");
	}
	
	console.log("oops 1");
	myBallObj.style.top = y + "px";  // Set the new position in the Y.  //This is the end of Devopment for button movement! Awesome.
	myBallObj.style.left = x + "px"; 
	console.log("oops 2");
}



