// JavaScript Document
// Exercise Move the Ball - Jonathan Plotz

window.onload = initAll;

function initAll()
{
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
	document.getElementById("btnChangeBall").onlick = changeBallChar;
	console.log("hi 4");
}

function moveBall()
{
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
	console.log("Working 1");
	var answer = prompt("What character do you want for the ball?", "*");
	console.log("Working 1.5");
	if (answer)myBallObj.innerHTML = answer;
	console.log("Working 2");
}


