// JavaScript Document
// Author - Jonathan Plotz
// Date   - 24 Mar 2016

/* global boxbox */


var canvasElem;
var world;

window.onload = initAll;

function initAll()
{
	"use strict";
	canvasElem = document.getElementById("game");
	world = boxbox.createWorld(canvasElem);
	
	world.createEntity({
		name: "player",
		shape: "circle",
		radius: 1,
		density: 4,
		x: 2,
		image: "Pig.gif",
		onKeyDown: function(e) {this.applyImpulse(325, 62);}
	});
	
	world.createEntity({
		name: "ground",
		shape: "square",
		type: "static",
		color: "rgb(0, 100, 0)",
		width: 29, 
		height: 0.5,
		y: 12
	});
	var block = {
		name: "block",
		shape: "square",
		color: "brown",
		width: 0.5,
		height: 4,
		image: "pillar.gif",
		onImpact: function(entity, force) {
			if (entity.name() === "player") {
				this.color("black");
			}
		}
	};
	
	var wideblock = {
		name: "wideblock",
		shape: "square",
		color: "blue",
		width: 1,
		height: 4,
		image: "pyramid.png",
		onImpact: function(entity, force) {
			if (entity.name() === "player") {
				this.color("black");
			}
		}
	};
	
	world.createEntity(block, { x: 10 } );
	
	world.createEntity(block, { x: 13 } );
	
	world.createEntity(block, { x: 15 } );
	world.createEntity(block, {
		 x: 10,
		 y: 1,
		 width: 4,
		 height: 0.5,});
	world.createEntity(block, { x: 13 } );
	world.createEntity(block, { x: 10 } );
	world.createEntity(wideblock, {
		x: 10,
		y: -1.5,
		rotation: 20
	});
	
	world.createEntity(block, { x: 13 } );
	
	world.createEntity(block, { x: 17 } );
	
	world.createEntity(block, { x: 13 } );
	
	world.createEntity(block, {
		 x: 12,
		 y: 1,
		 width: 4,
		 height: 0.5,
	});
	world.createEntity(block, { x: 15 } );
	
	world.createEntity(block, { x: 17 } );
	
	world.createEntity(block, {
		 x: 15,
		 y: 1,
		 width: 4,
		 height: 0.5,
	});
	
	world.createEntity(wideblock, {
		x: 16,
		y: -1.5,
		rotation: 20
	});
	
	
		
	console.log("Completed initAll");
}