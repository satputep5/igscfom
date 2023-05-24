function validateEmpty(field, fieldName, name){	
	//if it's NOT valid
	if(field.val().length == 0){
		//fname.addClass("validation");
		fieldName.text("Please enter "+name);
		//fieldName.addClass("validation");		
		return false;
	}
	else{
		fieldName.text("");
		return true;
	}
}

function ValidateCaptcha(field1,field2,fieldName)
{
	var captcha = ConvertToLowerCase(field2.val())
	if(field1.val() != captcha)
	{
		fieldName.text("Please enter the correct CAPTCHA!");
		//alert("Please enter the correct CAPTCHA!");
		//ntrl2.value = "";
		//cntrl2.focus();
		return false;
	}
	
	else
	{	
		fieldName.text("");	
		return true;
	}
}

function CheckEmail(field, fieldName)
{
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!filter.test(field.val()))
	{
		fieldName.text("This e-mail address does not appear to be valid. Please check!");
		//fieldName.text("");
		//field.focus();
		return false;
	}
	else
	{	
		fieldName.text("");
		return true;
	}
}
//	Define a function to check empty for any image type of file or where we need to choose any file

function CheckEmptyFile(cntrl, strMsg)
{
//	alert(cntrl.value);
	if (cntrl.value == "" )
	{
		alert("Please choose " + strMsg + "!");
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


function CheckEmptyUpload(cntrl, strMsg)
{
//	alert(cntrl.value);
	if (cntrl.value == "" )
	{
		alert(strMsg + "!");
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}



function CheckString(cntrl)
{
	if(!RegExp("^[A-Za-z][\w]*[A-Za-z]+$").test(cntrl.value))
	{
		alert("Please enter alphabets only!");
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}

//	Define a function which will check alphabets only but it will allow to use space bar

function CheckStringWithSpace(cntrl)
{
//	if(!RegExp(/^[a-zA-Z]*[a-zA-Z\\s]+$/).test(cntrl.value)) // it will allow to use space bar between two words
	if(!RegExp("^[a-zA-Z][a-zA-Z\\s]+$").test(cntrl.value)) // it will allow to use space bar between two words
	{
		alert("Please enter alphabets only!");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	Define a function which will check alphabets only but it will allow to use space bar as well as / due to specific requirement

function CheckStringWithSpaceAndSlash(cntrl)
{
	if(!RegExp("^[a-zA-Z][a-zA-Z\\s\//g]+$").test(cntrl.value)) // it will allow to use space bar between two words and / in between words
	{
		alert("Please enter alphabets only!");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


function CheckFax(cntrl)
{
	if(!RegExp(/^[0-9][\d\- ]*[0-9]$/).test(cntrl.value))
	{
		alert("Fax number does not appear to be valid. Please check!");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


function CheckPhone(cntrl)
{
	if(!RegExp(/^[0-9][\d\- ]*[0-9]$/).test(cntrl.value))
	{
		alert("Phone number does not appear to be valid. Please check!");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}

function CheckPhoneLength(cntrl)
{
	var len = cntrl.value.length;
	if(len < 10 || len > 11)
	{
		alert("Phone number does not appear to be valid. Please check!");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
		return true;
}

function CheckFax(cntrl)
{
	if(!RegExp(/^[0-9][\d\- ]*[0-9]$/).test(cntrl.value))
	{
		alert("Fax number does not appear to be valid. Please check!");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}

function CheckInteger(cntrl, strMsg)
{   
//	var reg =/^[0,9][\d\-]*[0,9]$/;
	
//	var reg =/(^\d+$)|(^\d+\.\d+$)/
	var reg =/(^\d+$)/
//	alert(cntrl.value);
//	Test whether integer field is valid or not
	//if(isNaN(cntrl))
	if(!reg.test(cntrl.value))
	{
		alert(strMsg);
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		if(cntrl.value.charAt(0) == 0)
		{
			alert("Please enter integers without a leading 0 ");
			cntrl.value = "";
			cntrl.focus();
			return false;
		}
		else
		{
			return true;
		}
	}
}

//	Define a function to check whether any integers having 0 on first position ie 001 etc

function CheckZero(cntrl)
{   
	if(cntrl.value.charAt(0) == 0)
	{
		alert("Please enter integers without a leading 0 ");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}



function CheckCost(cntrl, strMsg)
{   
//	var reg =/^[0,9][\d\-]*[0,9]$/;
	
	var reg =/(^\d+$)|(^\d+\.\d+$)/
//	var reg =/(^\d+$)/
//	alert(cntrl.value);
//	Test whether integer field is valid or not
	//if(isNaN(cntrl))
	if(!reg.test(cntrl.value))
	{
		alert(strMsg);
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}



function CheckDecimal(cntrl, strMsg)
{   
//	alert("check decimal");
	if(parse.Int(cntrl.value) <= 0)
    {	
		alert(strMsg);
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


function CheckMonth(cntrl, strMsg)
{   
//	alert("check month");
	if(cntrl.value > 12 || cntrl.value == 0)
    {	
		alert(strMsg);
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


function CheckDiscValue(cntrl, strMsg)
{   
	if(cntrl.value >= 100 || cntrl.value == 0)
	{
		alert(strMsg);
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


function CheckAlphaNumerals(cntrl)
{
	if(!RegExp(/^[a-zA-Z][\w\d\ \.,-]*[a-zA-Z0-9]$/).test(cntrl.value))
	{
		alert("Please enter alphanumerals only!");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}

function CheckPassLength(cntrl)
{
	if (cntrl.value.length < 4)
	{
		alert("Password should have at least four characters.");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}



function CheckWebsiteUrl(cntrl) 
{
	if(cntrl.value != "")
	{
		var regexp = /(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/ ;
		if(!regexp.test(cntrl.value))
		{
			alert("This url does not appear to be valid. Please check!");
			cntrl.value = "";
			cntrl.focus();
			return false;
		}
		else
		{
			return true;
		}
	}
	
	else
		return true;
	
}

function ConfirmPassword(cntrl1, cntrl2)
{
	if(cntrl1.value != cntrl2.value)
	{
		alert("The 'Password' and 'Confirm Password' fields do not match!");
		cntrl1.value = "";
		cntrl2.value = "";
		cntrl1.focus();
		return false;
	}
	else 
	{
		return true;
	}
}

function ConfirmEmail(cntrl1, cntrl2)
{
	if(cntrl1.value != cntrl2.value)
	{
		alert("The 'e-mail' and 'Confirm e-mail' fields do not match!");
		cntrl1.value = "";
		cntrl2.value = "";
		cntrl1.focus();
		return false;
	}
	else 
	{
		return true;
	}
}

function CheckBox(cntrl , strMsg)
{
	if(cntrl.checked != 1)
	{
		alert("Please " + strMsg + "!");
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}

//	Define a function to convert upper case letter to lower case letter. It is used to make captcha as not case sensiitive

function ConvertToLowerCase(cntrl)
{
	var lower = cntrl.toLowerCase();
	return lower;
}





function CheckCombo(cntrl, strMsg)
{	
	if(cntrl.value < 1){
		alert("Please select " + strMsg + "!");
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	This function is used to check Premium Banner Image slot value. It means it should not more than 2 and less than 1 slots.

function CheckPremiumImageSlotValue(cntrl)
{   
	if(cntrl.value < 1 || cntrl.value > 2)
	{
		alert("You Can't add more than 2 or less than 1 slots for premium banner slot");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	This function is used to check Premium Banner Image slot width value. It means it should not more than 272 px .

function CheckPremiumImageSlotWidthValue(cntrl)
{   
	if(cntrl.value > 272)
	{
		alert("The slot width can't be more than 272 px ");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	This function is used to check Premium Banner Image slot height value. It means it should not more than 102 px .

function CheckPremiumImageSlotHeightValue(cntrl)
{   
	if(cntrl.value > 102)
	{
		alert("The slot height can't be more than 102 px ");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	This function is used to check semi Premium Banner Image slot value. It means it should not more than 4 and less than 1 slots.

function CheckSemiPremiumImageSlotValue(cntrl)
{   
	if(cntrl.value < 1 || cntrl.value > 4)
	{
		alert("You Can't add more than 4 or less than 1 slots for semi premium banner slot");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	This function is used to check Semi Premium Banner Image slot width value. It means it should not more than 132 px .

function CheckSemiPremiumImageSlotWidthValue(cntrl)
{   
	if(cntrl.value > 132)
	{
		alert("The slot width can't be more than 132 px ");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	This function is used to check Semi Premium Banner Image slot height value. It means it should not more than 65 px .

function CheckSemiPremiumImageSlotHeightValue(cntrl)
{   
	if(cntrl.value > 65)
	{
		alert("The slot height can't be more than 65 px ");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	This function is used to check Text banner slot value. It means it should not more than 6 slots.

function CheckTextSlotValue(cntrl)
{   
	if(cntrl.value < 1 || cntrl.value > 6)
	{
		alert("You Can't add more than 6 or less than 1 slots for text banner slot");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}

//	This function is used to check text banner slot width value. It means it should not more than 123 px according to design pattern.

function CheckTextSlotWidthValue(cntrl)
{   
	if(cntrl.value > 123)
	{
		alert("The slot width can't be more than 123 px ");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	This function is used to check text banner slot height value. It means it should not more than 200 px according to design pattern.

function CheckTextSlotHeightValue(cntrl)
{   
	if(cntrl.value > 200)
	{
		alert("The slot height can't be more than 200 px ");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}

//	Define a function to check the length of a title. It must be <= 65

function CheckTitleLength(cntrl)
{
//	alert(cntrl.value.length);
	if(cntrl.value.length > 65)
	{
		alert("The number of characters should not exceed 65!");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
		return true;
}



//	Define a function to check a user name. It should contain only alphabets and digits ie a-z or A-Z or 0-9. Nothing else	
function CheckUserName(cntrl)
{
	if(!RegExp(/^[A-Za-z]+[0-9]*$/).test(cntrl.value)) // it will check atlist one alphabets and digits
	{
		alert("User Name should be only alphanumeric.");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
		return true;
}

//	Define a function to check a user name. It should check length of  user name. It ,must be between 6-10 characters
function CheckUserNameLength(cntrl)
{
	if(cntrl.value.length < 6 || cntrl.value.length > 10 ) // it will check the length of user name. it must be between 6-10 characters.
	{
		alert("User Name must be between 6-10 characters.");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
		return true;
}

//	This function is used to check the number of characters in text area.

function CheckShortDescCharLength(cntrl)
{ 
//	alert(cntrl.value.length);
	if(cntrl.value.length > 200)
	{
		alert("You have exceeded the maximum number of characters. ");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	This function is used to check the number of characters in text area. This is a special case on the request from client we are going to make it 500 character long

function CheckShortDescCharLengthSpecial(cntrl)
{ 
//	alert(cntrl.value.length);
	if(cntrl.value.length > 600)
	{
		alert("You have exceeded the maximum number of characters. ");
		cntrl.value = "";
		cntrl.focus();
		return false;
	}
	else
	{
		return true;
	}
}


//	Contact Number validation start from here

/**
 * DHTML phone number validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

	// Declaring required variables
	var digits = "0123456789";
	// non-digit characters which are allowed in phone numbers
	var phoneNumberDelimiters = "()- ";
	// characters which are allowed in international phone numbers
	// (a leading + is OK)
	var validWorldPhoneChars = phoneNumberDelimiters + "+";
	// Minimum no of digits in an international phone no.
	var minDigitsInIPhoneNumber = 10;


function CheckContactNumber(cntrl)
{

	if (checkInternationalPhone(cntrl.value) == false)
	{
		alert("Contact number does not appear to be valid. Please check!")
		cntrl.value=""
		cntrl.focus()
		return false
	}
	return true
}
			  
function checkInternationalPhone(strPhone)
{
	var bracket = 3;
	strPhone = trim(strPhone)
	if(strPhone.indexOf("+")>1) return false
	if(strPhone.indexOf("-")!=-1)bracket = bracket+1
	if(strPhone.indexOf("(")!=-1 && strPhone.indexOf("(")>bracket) return false
	var brchr = strPhone.indexOf("(");
	if(strPhone.indexOf("(")!=-1 && strPhone.charAt(brchr+2)!=")")return false
	if(strPhone.indexOf("(")==-1 && strPhone.indexOf(")")!=-1)return false
	s = stripCharsInBag(strPhone,validWorldPhoneChars);
	return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
}

function trim(s)
{   
	var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not a whitespace, append to returnString.
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (c != " ") returnString += c;
    }
    return returnString;
}

function stripCharsInBag(s, bag)
{   
	var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function isInteger(s)
{   var i;
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function ConfirmAlternateEmail(cntrl1, cntrl2)
{
	if(cntrl1.value != cntrl2.value)
	{
		alert("The 'Alternate e-mail' and 'Confirm Alternate e-mail' fields do not match!");
		cntrl1.value = "";
		cntrl2.value = "";
		cntrl1.focus();
		return false;
	}
	else 
	{
		return true;
	}
}		  			  			  
//	Contact Number validation end here
