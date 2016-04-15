// JavaScript Document
// Exercise Check Form = My Name

window.onload = initAll;

function initAll()
{
	"use strict";
	initCheckForm();
}

function initCheckForm()
{
	"use strict";
	document.getElementById("txtFirstName").onkeyup = checkItem;
	document.getElementById("txtLastName").onkeyup = checkItem;
	document.getElementById("txtAddr1").onkeyup = checkItem;
	document.getElementById("txtAddr2").onkeyup = checkItem;
	document.getElementById("txtCity").onkeyup = checkItem;
	document.getElementById("txtState").onkeyup = checkItem;
	document.getElementById("txtZIP").onkeyup = checkItem;
	document.getElementById("txtPhone").onkeyup = checkItem;
	document.getElementById("txtEmail").onkeyup = checkItem;
	document.getElementById("txtYearBorn").onkeyup = checkItem;
	
	
}

var checkItem = function checkItemF()
{
	"use strict";
	var re;
	switch(this.id)
	{
		case"txtFirstName":
	 re = /^[A-Z](.{0,48})$/; //start with capital letter, and then any letter afterwards. 
	 if (re.test(document.getElementById("txtFirstName").value)) {
		document.getElementById("imgFirstName").src = "success.png"; 
	} else { document.getElementById("imgFirstName").src = "error.png"; }
	break;
	
		case"txtLastName":
	 re = /^[A-Z](.{0,48})$/; //start with capital letter, and then any letter afterwards. 
	 if (re.test(document.getElementById("txtLastName").value)) {
		document.getElementById("imgLastName").src = "success.png"; 
	} else { document.getElementById("imgLastName").src = "error.png"; }
	break;
	
		case"txtAddr1":
	 re = /^\d{1,3}.?\d{0,3}\s[a-zA-Z]{2,30}\s[a-zA-Z]{2,15}$/; //start with capital letter, and then any letter afterwards. 
	 if (re.test(document.getElementById("txtAddr1").value)) {
		document.getElementById("imgAddr1").src = "success.png"; 
	} else { document.getElementById("imgAddr1").src = "error.png"; }
	break;
	
		case"txtAddr2":
	 re = /^\d{1,3}.?\d{0,3}\s[a-zA-Z]{2,30}\s[a-zA-Z]{2,15}$/; //start with capital letter, and then any letter afterwards. 
	 if (re.test(document.getElementById("txtAddr2").value)) {
		document.getElementById("imgAddr2").src = "success.png"; 
	} else { document.getElementById("imgAddr2").src = "error.png"; }
	break;
	
		case"txtCity":
	 re = /^[A-Z](.{0,48})$/; //start with capital letter, and then any letter afterwards. 
	 if (re.test(document.getElementById("txtCity").value)) {
		document.getElementById("imgCity").src = "success.png"; 
	} else { document.getElementById("imgCity").src = "error.png"; }
	break;
	
		case"txtState":
	 re = /^((AL)|(AK)|(AS)|(AZ)|(AR)|(CA)|(CO)|(CT)|(DE)|(DC)|(FM)|(FL)|(GA)|(GU)|(HI)|(ID)|(IL)|(IN)|(IA)|(KS)|(KY)|(LA)|(ME)|(MH)|(MD)|(MA)|(MI)|(MN)|(MS)|(MO)|(MT)|(NE)|(NV)|(NH)|(NJ)|(NM)|(NY)|(NC)|(ND)|(MP)|(OH)|(OK)|(OR)|(PW)|(PA)|(PR)|(RI)|(SC)|(SD)|(TN)|(TX)|(UT)|(VT)|(VI)|(VA)|(WA)|(WV)|(WI)|(WY))$/;
	if (re.test(document.getElementById("txtState").value)) {
		document.getElementById("imgState").src = "success.png"; 
	} else { document.getElementById("imgState").src = "error.png"; }
	break;
	
		case"txtZIP":
	 re = /^^((\d{5}-\d{4})|(\d{5})|([AaBbCcEeGgHhJjKkLlMmNnPpRrSsTtVvXxYy]\d[A-Za-z]\s?\d[A-Za-z]\d))$/; //start with capital letter, and then any letter afterwards. 
	 if (re.test(document.getElementById("txtZIP").value)) {
		document.getElementById("imgZIP").src = "success.png"; 
	} else { document.getElementById("imgZIP").src = "error.png"; }
	break;
	
		case"txtPhone":
	 re = /^((\(\d{3}\)?)|(\d{3}))([\s-./]?)(\d{3})([\s-./]?)(\d{4})$/; //start with capital letter, and then any letter afterwards. 
	 if (re.test(document.getElementById("txtPhone").value)) {
		document.getElementById("imgPhone").src = "success.png"; 
	} else { document.getElementById("imgPhone").src = "error.png"; }
	break;
	
		case"txtEmail":
	 re = /^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$/; //start with capital letter, and then any letter afterwards. 
	 if (re.test(document.getElementById("txtEmail").value)) {
		document.getElementById("imgEmail").src = "success.png"; 
	} else { document.getElementById("imgEmail").src = "error.png"; }
	break;
	
		case"txtYearBorn":
	 re = /^\d{4}$/; //start with capital letter, and then any letter afterwards. 
	 if (re.test(document.getElementById("txtYearBorn").value)) {
		document.getElementById("imgYearBorn").src = "success.png"; 
	} else { document.getElementById("imgYearBorn").src = "error.png"; }
	break;
	
	}
};

function checkForm()
{
	"use strict";
	var checkPass = true;

	if (document.getElementById("imgFirstName").getAttribute("src") !== "success.png") { checkPass = false; }
	if (document.getElementById("imgLastName").getAttribute("src") !== "success.png") { checkPass = false; }
	if (document.getElementById("imgAddr1").getAttribute("src") !== "success.png") { checkPass = false; }
	if (document.getElementById("imgAddr2").getAttribute("src") !== "success.png") { checkPass = false; }
	if (document.getElementById("imgCity").getAttribute("src") !== "success.png") { checkPass = false; }
	if (document.getElementById("imgState").getAttribute("src") !== "success.png") { checkPass =false; }
	if (document.getElementById("imgZIP").getAttribute("src") !== "success.png") { checkPass = false; }
	if (document.getElementById("imgPhone").getAttribute("src") !== "success.png") { checkPass = false; }
	if (document.getElementById("imgEmail").getAttribute("src") !== "success.png") { checkPass = false; }
	if (document.getElementById("imgYearBorn").getAttribute("src") !== "success.png") { checkPass = false; }
	
	if(!checkPass) {alert ("Error on form. Check data entry."); }
	
	return checkPass;
}