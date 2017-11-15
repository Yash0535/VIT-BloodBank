function checkEntries(form){
     if(form.user.value == "" && form.pass.value == ""){
          alert("Please enter a valid user name or password");
          form.user.focus();
          return false;
     }else if(form.user.value == "" ){
		  alert("Please enter a valid user name");
          form.user.focus();
          return false;	
	 }else if(form.pass.value==""){
		  alert("Please enter a valid password");
          form.pass.focus();
          return false;	
	 }

return true;
}

function ModeValue(modevalue){ // Mode value
var cansubmit=false;
	document.print.mode.value=modevalue;
	if(trim(document.print.mode.value!='')){
		cansubmit=true;
	}
	return cansubmit;
}

function shareexp(){ // Share Experience
	var cansubmit=false;

	cansubmit= ForceEntry(document.share.name, "Please enter Your Name");
	if(cansubmit) cansubmit =isname(document.share.name,"Please don't use special characters");
	if(cansubmit) cansubmit=EmailValid(document.share.email,"Please enter valid Email",1);
    if(cansubmit) cansubmit =ForceEntry(document.share.experience,"Please enter Your experience");
	return cansubmit;
}

function referFriend(){ // refer
	var cansubmit=false;
	cansubmit= ForceEntry(document.refer.yourname, "Please enter your Name");
	if(cansubmit) cansubmit =isname(document.refer.yourname,"Name should not have any special characters");
	if(cansubmit) cansubmit=EmailValid(document.refer.youremail,"Please enter valid Email",1);
	if(cansubmit) cansubmit= ForceEntry(document.refer.name1, "Please enter your friend(s) Name");
	if(cansubmit) cansubmit =isname(document.refer.name1,"Name should not have any special characters");
	if(cansubmit) cansubmit=EmailValid(document.refer.email1,"Please enter your friend's E-mail Id",1);
	if(cansubmit) cansubmit=EmailValid(document.refer.email2,"Please enter your friend's E-mail Id",0);
	if(cansubmit) cansubmit=EmailValid(document.refer.email3,"Please enter your friend's E-mail Id",0);
	if(cansubmit) cansubmit=EmailValid(document.refer.email4,"Please enter your friend's E-mail Id",0);
	if(cansubmit) cansubmit=EmailValid(document.refer.email5,"Please enter your friend's E-mail Id",0);

	return cansubmit;
}

function EmailResults(){ // email results
	var cansubmit=false;
	cansubmit= ForceEntry(document.erfrom.yourname, "Please enter your Name");
	if(cansubmit) cansubmit =isname(document.erfrom.yourname,"Name should not have any special characters");
	if(cansubmit) cansubmit=EmailValid(document.erfrom.youremail,"Please enter E-mail Id",1);
	if(cansubmit){
	if ((trim(document.erfrom.frdemail.value) == "")){
		alert("Please enter E-mail Id");
		document.erfrom.frdemail.focus();		
		return false;
	}
    }
	
	if((trim(document.erfrom.frdemail.value) != "")){
		var cansubmit=false;		
	    var temail=document.erfrom.frdemail.value;
	    var splemail=temail.split(',');
	      var len=splemail.length;		 
	     var i;
	     for(i=0;i<len;i++){
	         var emid=splemail[i];
	        //alert(emids);

	    cansubmit=EmailValidnew(emid,"Please enter a Valid E-mail Id");
	     
	}	
	}	
	
	
	return cansubmit;

}

//emailvalid

function EmailValidnew(emailtext,MsgErr)
{
	

	if (trim(emailtext) != ''){
		
	emailStr=emailtext;

	var emailPat=/^(.+)@(.+)$/

	var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]"

	var validChars="\[^\\s" + specialChars + "\]"

	var quotedUser="(\"[^\"]*\")"

	var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/

	var atom=validChars + '+'

	var word="(" + atom + "|" + quotedUser + ")"

	var userPat=new RegExp("^" + word + "(\\." + word + ")*$")

	var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")

	var matchArray=emailStr.match(emailPat)
		if (matchArray==null) 
	{
	  	MsgErr=MsgErr;
				alert(MsgErr);
		document.erfrom.frdemail.focus();
	return false
	}
	
	var user=matchArray[1]
	var domain=matchArray[2]


	if (user.match(userPat)==null) 
	{

		MsgErr=MsgErr+"--The username in Email doesn't seem to be valid.";
				alert(MsgErr);
		document.erfrom.frdemail.focus();
		return false
	}


	var IPArray=domain.match(ipDomainPat)
		if (IPArray!=null) 
	{   
		  for (var i=1;i<=4;i++) 
		  {
			if (IPArray[i]>255) 
			{
				MsgErr=MsgErr+"--Destination IP address is invalid!";
						alert(MsgErr);
				document.erfrom.frdemail.focus();
				return false;
			}
		}

			return true;
	
	}

	var domainArray=domain.match(domainPat)
if (domainArray==null) 
	{
		MsgErr=MsgErr+"-- Doesn't seem to be valid.";
				alert(MsgErr);
		document.erfrom.frdemail.focus();
		 return false;
	}

	var atomPat=new RegExp(atom,"g")
	var domArr=domain.match(atomPat)
	var len=domArr.length
	if (domArr[domArr.length-1].length < 2 || 
	 domArr[domArr.length-1].length>3) {
	   
	 MsgErr=MsgErr+"--The address must end in a three-letter domain, or two letter country.";
	 		alert(MsgErr);
	  document.erfrom.frdemail.focus();
	  return false;

	}

	if (len<2) {
	   var errStr="This address is missing a hostname!"
	  MsgErr=MsgErr+"--"+errStr;
	  		alert(MsgErr);
			document.erfrom.frdemail.focus();
		return false;
	}	
	}
	return true;

	}
//email

//end email valid


function regsiterbank(){ // register blood bank
	var cansubmit=false;
	cansubmit= ForceEntry(document.bloodbank.bname, "Please enter a Blood Bank Name");	
	if(cansubmit){
	if ((trim(document.bloodbank.bphone.value) == "")){
		alert("Please enter Phone Number");
		document.bloodbank.bphone.focus();
		cansubmit=false;	
		return false;
	}
    }
	if(cansubmit) cansubmit=isPhone(document.bloodbank.bphone,"Please enter a valid Phone Number",5);
	if(cansubmit) cansubmit=EmailValid(document.bloodbank.email,"Please enter E-mail Id ",1);
	return cansubmit;
	
}
function feedBack(){ // Share Experience
	var cansubmit=false;
	cansubmit= ForceEntry(document.feedback.name, "Please enter your Name");
	if(cansubmit) cansubmit =isname(document.feedback.name,"Name should not have any special characters");
	if(cansubmit) cansubmit=EmailValid(document.feedback.email,"Please enter valid email id ",1);
	if(cansubmit) cansubmit =ForceEntry(document.feedback.feedback,"Please enter Your Suggestion/Feedback");

	return cansubmit;
}

function DeleteMe(){
	con=confirm("You are here to save a life, are you sure to miss out on this chance?");
	if(con){
		document.newfrm.delete1.value="1";
		document.newfrm.submit();
		return false;
	}
	return false;
}

function clearform()	
	{
	document.newfrm.name.value="";
	document.newfrm.pwd1.value="";
	document.newfrm.pwd.value="";
	document.newfrm.email.value="";
	document.newfrm.ddob.value="";
	document.newfrm.mdob.value="";
	document.newfrm.ydob.value="";
	document.newfrm.gender[0].Checked;
	document.newfrm.weight.value="";
	document.newfrm.dayphone.value="";
	document.newfrm.evephone.value="";
	document.newfrm.mobile.value="";
	document.newfrm.state.value="";
	document.newfrm.city.value="";
	document.newfrm.town.value="";
	document.newfrm.bloodgroup.value="";
	document.newfrm.dlast.value="";
	document.newfrm.mlast.value="";
	document.newfrm.ylast.value="";
	document.newfrm.about_me.value="";
	}

//-->
function FormCity(){
	if(document.newfrm.page.value == "edit"){
		document.newfrm.update.value="";
	}else{
		document.newfrm.insert.value="0";
	}
	document.newfrm.middle.value="1";
	document.newfrm.submit();
}
function FormTown(){
	if(document.newfrm.page.value == "edit"){
		document.newfrm.update.value="";
	}else{
		document.newfrm.insert.value="";
	}
	document.newfrm.middle.value="1";
	document.newfrm.submit();
}
function CheckUser(){

	/*var cansubmit=false;
	if(document.newfrm.action="register.php"){
		cansubmit=ForceEntry(document.newfrm.username,"Please enter your username");
		if (cansubmit) cansubmit= MaxLen(document.newfrm.username,6,"Username must contain atleast ");

	}
	return cansubmit;*/
	nm = document.newfrm.username.value;
	//nm = nm.toString().toLowerCase();

	var cansubmit=false;

	cansubmit=ForceEntry(document.newfrm.username,"Please enter your username");
	if (cansubmit) cansubmit= MaxLen(document.newfrm.username,6,"Username must contain atleast ");
	if(cansubmit)
	{
		x=window.open("checkuser.php?un="+nm,"win1",'width=450,height=100,menubar=no,status=no,scrollbars=no,toolbar=no,top=200,left=250');
		x.focus();
	}
	else{
		document.newfrm.username.focus();
		//return false;
	}
}

//Start Mobile Status

function checkmobilestatus(id)
      {
		               window.open("mobilestatus.php?id="+id,"win1",'width=400,height=250,menubar=no,status=no,scrollbars=no,toolbar=no,top=200,left=250');
      }

function phonenotworking()
{
		if(document.mstatusfrm.comments.value=="")
			{
				alert("Please Enter Comments");
				document.mstatusfrm.comments.focus();
				return false;
			}
			return true;
}


			
// End Mobile Status



//Start send SMS

function sendsmsto(id)
{	
	 window.open("sendsmsforhide.php?id="+id,"win1",'width=300,height=150,menubar=no,status=no,scrollbars=no,toolbar=no,top=200,left=250');
  
}

function validesms() {
	if(trim(document.sendsmsfrm.donors_mobile.value)=="") {
		alert('Please enter mobile number');
		document.sendsmsfrm.donors_mobile.value="";
		document.sendsmsfrm.donors_mobile.focus();
		return false;
	}

	if(document.sendsmsfrm.donors_mobile.value.length<10 || (isNaN(document.sendsmsfrm.donors_mobile.value))) {
		alert('Please enter valid mobile number');
		document.sendsmsfrm.donors_mobile.focus();
		return false;
	}
	/*

	if(document.sendsmsfrm.sms_message.value=="") {
		alert('Please enter sms message to donor');
		document.sendsmsfrm.sms_message.focus();
		return false;
	}

	alert(document.sendsmsfrm.sms_message.value.length);
	
	if(document.sendsmsfrm.sms_message.value.length>140) {
		alert('You have entered more than maxmimum character.');
		document.sendsmsfrm.sms_message.value = document.sendsmsfrm.sms_message.value.substr(0,140);
		alert(document.sendsmsfrm.sms_message.value);
		document.sendsmsfrm.sms_message.focus();
		return false;
	}
	*/

}
/*
function usersendsms()
{

var cansubmit=false;
cansubmit= ForceEntry(document.sendsmsfrm.your_name, "Please enter your name");

if(cansubmit){
	if ((trim(document.sendsmsfrm.your_mobile.value) == "")){
		alert("Please enter Your mobile number");
		document.sendsmsfrm.your_mobile.focus();
		cansubmit=false;	
		return false;
	}
    }
if(cansubmit) cansubmit=isPhone(document.sendsmsfrm.your_mobile,"Please enter a valid mobile number",10);
if(cansubmit){
	if ((trim(document.sendsmsfrm.sms_mobile.value) == "")){
		alert("Please enter SMS mobile number");
		document.sendsmsfrm.sms_mobile.focus();
		cansubmit=false;	
		return false;
	}
    }
if(cansubmit) cansubmit =ForceEntry(document.sendsmsfrm.sms_message,"Please enter SMS Message");
return cansubmit;
}
*/




function checkvalidate()
{
	var a=new Array();
	a=document.getElementsByName("sms[]");
	var p=0;
	for(i=0;i<a.length;i++){
		if(a[i].checked){
			p=1;
		}
	}
	if (p==0){
		alert('please select at least one check box');
		return false;
	}
	document.searchresultsfrm.action ="newsearchresults.php?action=sms";	
	document.searchresultsfrm.submit();
	return true;
}

function emailprint() {
	document.searchresultsfrm.action ="newsearchresults.php?act=print";	
	document.searchresultsfrm.submit();
	return true;
}

//End send SMS
//function only validate for mobile no or landline no 
function isLandline(num,str)
{ 
	var landlineno = num.value; 
	var count=0;
	
	if(trim(landlineno)=='')
	{
	return true;
	}
	if(landlineno.length == 11)
	{
		if(landlineno.charAt(0)!=0)
		{
			alert(str);
			return false;
			num.focus();
		}
		else if(landlineno=='01234567899')
		{
			alert(str);
			num.focus();
			return false;
		}
		for(var i=1;i<landlineno.length;i++)
		{
			if(landlineno.charAt(1)==landlineno.charAt(i))
			count=count+1;
		}
		if(count == 10)
		{

			alert(str);
			num.focus();
			return false;
		}
		console.log("count:", count);
		console.log("landlineno:", landlineno);
		return true;
	}
	else if(landlineno.length == 10)
	{
	console.log("comes to else part");
		if(landlineno.charAt(0) == 0)
		{
			alert(str);
			num.focus();
			return false;
		}
		for(var i=0;i<landlineno.length;i++)
		{
		  if(landlineno.charAt(0)==landlineno.charAt(i))
		  count=count+1;
		}
		if(count==10)
		{
			alert(str);
			num.focus();
			return false;
		}
		if(landlineno=='1234567899')
		{
			alert(str);
			num.focus();
			return false;
		}
		return true;
	}
	return true;
}

//register

function Register()
{

var cansubmit=false;

cansubmit= ForceEntry(document.newfrm.name, "Please enter your name");
if(cansubmit) cansubmit =isname(document.newfrm.name,"Name should not contain any special characters");
if(cansubmit) {
if(document.newfrm.action=="register.php"){
		cansubmit=ForceEntry(document.newfrm.username,"Please enter your username");
		if(cansubmit) cansubmit =isusername(document.newfrm.username,"Username should not contain any special characters");
		if (cansubmit) cansubmit= MaxLen(document.newfrm.username,6,"Username must contain atleast ");

	}
}
if(cansubmit) cansubmit=ForceEntry(document.newfrm.username,"Please enter your username");
		if(cansubmit) cansubmit =isusername(document.newfrm.username,"Username should not contain any special characters");
		if (cansubmit) cansubmit= MaxLen(document.newfrm.username,6,"Username must contain atleast ");

if (cansubmit) cansubmit=ForceEntry(document.newfrm.pwd,"Please enter a password");
if (cansubmit) cansubmit=ForceEntry(document.newfrm.pwd1,"Please enter a Confirm password");
if (cansubmit) cansubmit= MaxLen(document.newfrm.pwd,4,"Password must contain atleast ");
if (cansubmit) cansubmit= ForceEntry(document.newfrm.pwd, "Password should not contain any special characters");
if (cansubmit) cansubmit= issame(document.newfrm.pwd,document.newfrm.pwd1,"Password and Confirm Password should be same");
if(cansubmit) cansubmit=DateValid1(document.newfrm.ddob,document.newfrm.mdob,document.newfrm.ydob,"18","");
if(cansubmit) cansubmit=DateValid(document.newfrm.ddob,document.newfrm.mdob,document.newfrm.ydob,"18","");
if(cansubmit) cansubmit=formRadio(document.newfrm.gender,"Please select your gender");

enterdate = document.newfrm.mdob.value+"/"+document.newfrm.ddob.value+"/"+document.newfrm.ydob.value;
var from_date=new Date(enterdate);
var curdate=new Date();
temp_date = curdate.getTime() - from_date.getTime();
one_day=1000*60*60*24*365;
calculated_date = Math.ceil(temp_date/one_day);
if(calculated_date>55) {
	alert("Your age exceed more than 55");
	document.newfrm.ydob.focus();
	cansubmit=false;	
	return false;
}

function IsMobile(mbo,str){

		var count=0;
		var mobileno = mbo.value;
	if ((trim(mobileno) == "")){
		
		alert("Please enter mobile number");
		mbo.focus();	
		return false;
	}
		if((mobileno.charAt(0)!=9)&&(mobileno.charAt(0)!=8)&&(mobileno.charAt(0)!=7))
		{
		alert(str);
		mbo.focus();
		return false;
		}
		for(var i=0;i<mobileno.length;i++)
		{
		  if(mobileno.charAt(0)==mobileno.charAt(i))
		  count=count+1;
		}
		if(count==10)
		{
		alert(str);
		mbo.focus();
		return false;
		}
		return true;
		
	}

if(cansubmit) cansubmit=IsMobile(document.newfrm.mobile,"Please enter a valid mobile number");
if(cansubmit) cansubmit=isLandline(document.newfrm.dayphone,"Please enter a valid residence number");
if(cansubmit) cansubmit=isLandline(document.newfrm.evephone,"Please enter a valid office number");
if(cansubmit) cansubmit=isPhone(document.newfrm.mobile,"Please enter a valid mobile number",10);
if(cansubmit) cansubmit=isPhone(document.newfrm.dayphone,"Please enter a valid residence number",10);
if(cansubmit) cansubmit=isPhone(document.newfrm.evephone,"Please enter a valid office number",10);

if(cansubmit) cansubmit=isNumber(document.newfrm.weight,50,"Please enter a valid weight");

if(cansubmit) cansubmit=EmailValid(document.newfrm.email,"Please enter valid E-mail id ",1);

if(cansubmit) cansubmit=FormSelect(document.newfrm.state,"Please select your residing state");
if(cansubmit) cansubmit=FormSelect(document.newfrm.city,"Please select your residing city");
if(cansubmit) cansubmit=FormSelect(document.newfrm.town,"Please select your residing area");
if(document.newfrm.city.value=="9999" && (document.newfrm.txtothercity.value=="Specify the city" || document.newfrm.txtothercity.value=="") ) {
	alert("Please enter your residing city");
	document.newfrm.txtothercity.focus();
	return false;
}

if(document.newfrm.town.value=="6483" && (document.newfrm.txtotherarea.value=="Specify the area" || document.newfrm.txtotherarea.value=="") ) {
	alert("Please enter your residing area");
	document.newfrm.txtotherarea.focus();
	return false;
}

if(cansubmit) cansubmit=FormSelect(document.newfrm.bloodgroup,"Please select your blood group");

if( !(document.newfrm.suffered.checked) )
{
	alert("Please read and accept the eligibility criteria.");
	cansubmit=false;
	return false;
}

lastenterdate = document.newfrm.mlast.value+"/"+document.newfrm.dlast.value+"/"+document.newfrm.ylast.value;
var last_date=new Date(lastenterdate);
var curdate=new Date();

 if (curdate.getTime() < last_date.getTime())
{
	m=" Please provide correct Date of last blood donation ";
	document.newfrm.mlast.focus();
	alert(m);
	return false;
}


return cansubmit;

}
//end register

// Start Forgetpassword 

function validate()
	{ 
	var cansubmit=false;
	cansubmit=EmailValid(document.forgetpassword.email,"Please enter valid Email",1);
	return cansubmit;
    }

 
 // End Forgetpassword



//search
function cityShow(){
	document.sfrm.cshow.value="1";
	document.sfrm.search.value="";
	document.sfrm.action="search.php";
	document.sfrm.submit();
	return true;
}
function townShow(){
	document.sfrm.cshow.value="1";
	document.sfrm.tshow.value="1";
	document.sfrm.bgshow.value="1";
	document.sfrm.search.value="";
	document.sfrm.action="search.php";
	document.sfrm.submit();
	return true;
}
function FormCheck(){
	var cansubmit=false;
	cansubmit= FormSelect(document.sfrm.state,"Please select state");
	if(cansubmit) cansubmit=FormSelect(document.sfrm.city,"Please select city");
	if(cansubmit) cansubmit=FormSelect(document.sfrm.town,"Please enter town");
	if(cansubmit) cansubmit=FormSelect(document.sfrm.bloodgroup,"Please select blood group");
	document.sfrm.search.value="true";
	document.sfrm.action="searchresults1.php";
	
return cansubmit;
}
//inner
function icityShow(){
	document.sfrm.cshow.value="1";
	document.sfrm.tshow.value="";
	document.sfrm.bgshow.value="";
	document.sfrm.search.value="";
	document.sfrm.action="searchform.php";
	document.sfrm.target="_self";
	document.sfrm.submit();
	return true;
}
function itownShow(){
	document.sfrm.cshow.value="1";
	document.sfrm.tshow.value="1";
	document.sfrm.bgshow.value="1";
	document.sfrm.search.value="";
	document.sfrm.action="searchform.php";
	document.sfrm.target="_self";
	document.sfrm.submit();
	return true;
}
function iFormCheck(){
	
	var cansubmit=false;
	cansubmit= FormSelect(document.sfrm.state2,"Please select a valid state");
	if(cansubmit) cansubmit=FormSelect(document.sfrm.city2,"Please select a valid city");
	if(cansubmit) cansubmit=FormSelect(document.sfrm.town2,"Please enter a valid Area");
	if(cansubmit) cansubmit=FormSelect(document.sfrm.bloodgroup2,"Please select a valid blood group");
	
	if(cansubmit){

		document.sfrm.search.value="true";
		document.sfrm.target="_blank";
	
		return true;
	}
	return cansubmit;
}
//end search



function trim(strinput)
{
    var i;
					 while(strinput.charAt(0)==' '||strinput.charAt(0)=='\t'||strinput.charAt(0)=='\n'||strinput.charAt(0)=='\r')
					{
					strinput= strinput.substring(1);
					}
					i = strinput.length-1;
					while(strinput.charAt(i)==' '||strinput.charAt(i)=='\t'||strinput.charAt(i)=='\n'||strinput.charAt(i)=='\r')
					{
					strinput = strinput.substring(0,i);
					i = i-1;
					}
return strinput;
}

function issame(lenObj,lenObj1,lenobjMsg)
{
	str=lenObj.value;
	str1=lenObj1.value;
	if(str!=str1)
	{
		alert(lenobjMsg);
		lenObj.focus();
		return false;
	}
	return true;
}

function ForceEntry(strObject,strMessage)
{
var Charss = " -_/:,.'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
var Chars = " +-()0123456789";
tti = strObject.value;
 if (trim(tti) != '')
 {
	for (var i = 0; i < tti.length; i++)
	{
		if (i == 0)
		{
			if (Charss.indexOf(tti.charAt(i)) == 0)
			{
				alert(strMessage);
				strObject.focus();
				return false;
			}
		}
		if (Charss.indexOf(tti.charAt(i)) == -1)
		{
			alert(strMessage);
				strObject.focus();
			return false;
		}
	}
}
else
{
		alert(strMessage);
		strObject.focus();
  return false;
  }
  return true;
}
//priya

//email
function EmailValid(emailtext,MsgErr,NullValid)
{
if(NullValid >0){
	if (trim(emailtext.value) == "")
	{
		MsgErr=MsgErr;
		alert(MsgErr);
		emailtext.focus();
		return false;
	}
}
	if (trim(emailtext.value) != ''){
	emailStr=emailtext.value;

	var emailPat=/^(.+)@(.+)$/

	var specialChars="\\(\\)<>@,;:\\\\\\\"\\.\\[\\]"

	var validChars="\[^\\s" + specialChars + "\]"

	var quotedUser="(\"[^\"]*\")"

	var ipDomainPat=/^\[(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})\]$/

	var atom=validChars + '+'

	var word="(" + atom + "|" + quotedUser + ")"

	var userPat=new RegExp("^" + word + "(\\." + word + ")*$")

	var domainPat=new RegExp("^" + atom + "(\\." + atom +")*$")

	var matchArray=emailStr.match(emailPat)
		if (matchArray==null) 
	{
	  	MsgErr=MsgErr;
				alert(MsgErr);
		emailtext.focus();
	return false
	}
	
	var user=matchArray[1]
	var domain=matchArray[2]


	if (user.match(userPat)==null) 
	{

		MsgErr=MsgErr+"--The username in Email doesn't seem to be valid.";
				alert(MsgErr);
		emailtext.focus();
		return false
	}


	var IPArray=domain.match(ipDomainPat)
		if (IPArray!=null) 
	{   
		  for (var i=1;i<=4;i++) 
		  {
			if (IPArray[i]>255) 
			{
				MsgErr=MsgErr+"--Destination IP address is invalid!";
						alert(MsgErr);
				emailtext.focus();
				return false;
			}
		}
			return true;
	
	}

	var domainArray=domain.match(domainPat)
if (domainArray==null) 
	{
		MsgErr=MsgErr+"-- Doesn't seem to be valid.";
				alert(MsgErr);
		emailtext.focus();
		 return false;
	}

	var atomPat=new RegExp(atom,"g")
	var domArr=domain.match(atomPat)
	var len=domArr.length
	if (domArr[domArr.length-1].length < 2 || 
	 domArr[domArr.length-1].length>3) {
	   
	 MsgErr=MsgErr+"--The address must end in a three-letter domain, or two letter country.";
	 		alert(MsgErr);
	  emailtext.focus();
	  return false;

	}

	if (len<2) {
	   var errStr="This address is missing a hostname!"
	  MsgErr=MsgErr+"--"+errStr;
	  		alert(MsgErr);
			emailtext.focus();
		return false;
	}
	}
	return true;

	}
//email

function MaxLen(lenObj,minlimit,Msg)
{
	str=lenObj.value;
	if(str.length < minlimit)
	{
		alert(Msg +minlimit +" characters");
		lenObj.focus();
		return false;
	}
	return true;
}


 function isname(nameObj,nameMsg)
{
	 var i=0
		 names=nameObj.value;
	 for(i;i<names.length;i++)
	 {
	 	var c=names.charAt(i)
	 	if (!(((c >= "a") && (c <= "z")) || ((c >= "A") && (c <= "Z"))|| ((c >= "0") && (c <= "9")) || (c == ".") || (c == " ")))
	 	{
	 		alert(nameMsg);
			nameObj.focus();
			return false
	 	}
	 }
     	 return true
}

 function isusername(nameObj,nameMsg)
{
	 var i=0
		 names=nameObj.value;
	 for(i;i<names.length;i++)
	 {
	 	var c=names.charAt(i)
	 	if (!(((c >= "a") && (c <= "z")) || ((c >= "A") && (c <= "Z"))|| ((c >= "0") && (c <= "9"))))
	 	{
	 		alert(nameMsg);
			nameObj.focus();
			return false
	 	}
	 }
     	 return true
}

function DateValid1(dateObject,monthObject,yearObject,alimit,strMessage){
if((isNaN(dateObject.value) == true) || (trim(dateObject.value) == ''))
		{
			alert(strMessage+ " Please select Date of birth " );
			dateObject.focus();
			return false;
		}
		else if ((isNaN(monthObject.value) == true) || (trim(monthObject.value) == ''))
		{
			alert( strMessage+ " Please select Month of birth" );
			monthObject.focus();
			return false;
		}
		else if ((isNaN(yearObject.value) == true) || (trim(yearObject.value) == ''))
		{
				alert(strMessage+ " Please select Year of birth" );
			yearObject.focus();
			return false;
		}
		return true;
}
function DateValid(dateObject,monthObject,yearObject,alimit,strMessage)
	{
		if(alimit >0){
		if(!isDate(eval(dateObject.value),eval(monthObject.value),eval(yearObject.value)))
		{
			alert(strMessage+"  Date of birth");
			dateObject.focus();
			return false;
		}
		}else{
			if(!isDate((dateObject.value),(monthObject.value),(yearObject.value)))
		{
			alert(strMessage+"  Date of birth");
			dateObject.focus();
			return false;
		}
		}

		enterdate = monthObject.value+"/"+dateObject.value+"/"+yearObject.value;
		var from_date=new Date(enterdate);
		var curdate=new Date();

		 if (curdate.getTime() < from_date.getTime())
		{
			m=strMessage + " You should be atleast "+alimit+" years old";
			alert(m);
			return false;
		}
		if(alimit >0){
			if(from_date.getFullYear() >= (curdate.getFullYear() - alimit)){
				m=strMessage +"You should be atleast "+alimit+" years old";
				alert(m);
				return false;
			}
		}
	return true;

	}
	
function isDate(ThisDay,ThisMon,ThisYear)
{
	var ValidDay;
	ThisDay=parseInt(ThisDay);
	ThisMon=parseInt(ThisMon);
	ThisYear=parseInt(ThisYear);
	if(ThisDay>31||ThisMon>12||ThisYear>4000||ThisYear<1||ThisDay<1||ThisMon<1)
		{
		return false;
		}
	switch (ThisMon)
		{
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 12:
				ValidDay=31;
				break;
		case 2:ValidDay=28;
				if(ThisYear%4==0)
					{
					if(ThisYear%400==0)
						ValidDay=29;
					else
						{
						if(ThisYear%100==0)
							ValidDay=28;
						else
							ValidDay=29;
						}
					}
				break;
		case 4:
		case 6:
		case 9:
		case 11:
				ValidDay=30;
				break;
		default:
				return false;
		}
	if(ValidDay<ThisDay)
		return false;
	else
		return true;
}


function isPhone(strObject,strMessage,strLimit)
{
//var Charss = " -_/:,.abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
var Chars = " +-()0123456789";
tti = strObject.value;
 if (trim(tti) != '')
 {
	for (var i = 0; i < tti.length; i++)
	{
		if (i == 0)
		{
			if (Chars.indexOf(tti.charAt(i)) == 0)
			{
				alert(strMessage);
				strObject.focus();
				return false;
			}
		}
		if (Chars.indexOf(tti.charAt(i)) == -1)
		{
			alert(strMessage);
				strObject.focus();
			return false;
		}
	}
	if(tti.length < strLimit){
		alert(strMessage);
		strObject.focus();
		return false;
	}
	
}

  return true;
}

function isEmpty(strObject,strMessage){
	tti = strObject.value;
	if (trim(tti) == '')
	{
		alert(strMessage);
		strObject.focus();
		return false;
	}
	return true;
}

function valButton(btn) {
var cnt = -1;
for (var i=0; i < btn.length; i++) {
   if (btn[i].checked) {cnt = i; i = btn.length;}
   }
if (cnt > -1) return btn[cnt].value;
else return null;
}

function formRadio(strObject,strMessage) {
var btn = valButton(strObject);
if (btn == null){
	alert(strMessage);
	
	return false;
}
else{

	return true;
}
}



function isNumber(strObject,weightLimit,strMsg){
if (trim(strObject.value) != '')
	{
		if(isNaN(strObject.value)){
			alert(strMsg);
			strObject.focus();
			return false;
		}else{
			if(strObject.value < weightLimit){
				alert(strMsg+"\n Should be atleast 50 Kgs");
				strObject.focus();
				return false;
			}
		}
	}else{
		alert(strMsg);
		strObject.focus();
		return false;
	}
  return true;

}


function FormSelect(selectObject,selectmsg){

	if (selectObject.value == '')
	 {
	  alert(selectmsg);
	  selectObject.focus();
	  return false;
	 }
return true;
}

function OthersEnable() {
	if(document.getElementById("town").value=="") {
		document.getElementById("others").disabled = false;
	}
	else {
		document.getElementById("others").value = "";
		document.getElementById("others").disabled = true;
	}
}



function OthersDisplay(lstvalue,cntName) {
	if(cntName==1) {
		divcntName="othercity";
	}
	else if(cntName==2) {
		divcntName = "otherarea";
	}
	txtname = "txt"+divcntName;
	
	if (lstvalue=="9999" && cntName==1) {
		document.getElementById(divcntName).style.display="";
	}
	else if (lstvalue=="6483" && cntName==2)
	{
		document.getElementById(divcntName).style.display="";
	}
	else {
		document.getElementById(divcntName).style.display="none";
		
	}
}

function GetXmlHttpObject()
{
	var xmlHttp=null;
	try
	  {
	  // Firefox, Opera 8.0+, Safari
	  xmlHttp=new XMLHttpRequest();
	  }
	catch (e)
	  {
	  // Internet Explorer
	  try
		{
		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
	  catch (e)
		{
			  try {      
				  xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");      
			  }
			  catch (e) {      
				  alert("Your browser does not support AJAX!");      return false;      
			  }
		}
	  }
	return xmlHttp;
}

var http = GetXmlHttpObject();
var Gstate;
var Gcity;
var Gvalu;
function handleResponse() {
	if(http.readyState == 4) {
		var response = http.responseText;
		try{
			if(Gstate!="" && Gcity!="") {
				if(Gvalu=="2") {
					document.getElementById("area2").innerHTML = response;
				}
				else {
					document.getElementById("area").innerHTML = response;
				}
			}
			else if(Gstate!="") {
				if(Gvalu=="2") {
					document.getElementById("city2").innerHTML = "";
					document.getElementById("city2").innerHTML = response;
				}
				else {
					document.getElementById("city").innerHTML = "";
					document.getElementById("city").innerHTML = response;
				}
			}
			//OthersDisplay();
		}
		catch(e) {
			alert(e);
		}
	}
}


function selectlocation(state,city,val) {
	Gstate=state;
	Gcity=city;
	Gvalu=val;
	var randomid=Math.random()*5;	
	url = "http://www.bharatbloodbank.com/location_ajax.php?rnd="+randomid+"&state="+state+"&city="+city+"&valu="+val;
    http.open('get',url,true);
    http.onreadystatechange = handleResponse;
    http.send(null);
}

function searchselectlocation(state,city,val) {
	
	Gstate=state;
	Gcity=city; 
	Gvalu=val;
	
	var randomid=Math.random()*5;	
	url = "http://www.bharatbloodbank.com/search_location_ajax.php?rnd="+randomid+"&state="+state+"&city="+city+"&valu="+val;
	
    http.open('get',url,true);
    http.onreadystatechange = handleResponse;
    http.send(null);
}


function onfocusText(controlName, message) {
	if(controlName.value==message) {
		controlName.value="";
	}
	else if(controlName.value=="") {
		controlName.value = message;
	}
}
