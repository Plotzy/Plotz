// JavaScript Document

function sendMessage() {
	"use strict";
	
	var email = {
		setFrom:"Plotzy01@gmail.com",
		addRecipient:"localhost", 
		setSubject:"Testing 123",
		setText:"Testing Testing Testing"	
	};
	
	
	
	
	var encodedEmail;
    encodedEmail = btoa(email);
	console.log("Encoded Email: " + encodedEmail);
	
    var message;
    message.setRaw(encodedEmail);
	
    message = service.users().messages().send(userId, message).execute();

	console.log("Message id: " + message.getId());
    console.log(message.toPrettyString());
  } 
  
  
 
 