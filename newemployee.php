<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <title>VIT Blood Bank - Donate blood & save a life in time!</title> 
  <meta Name="Description" Content="Every 2 seconds, someone needs blood in India. When you donate blood, you save a life in time. Be a donor on BharatBloodbank.com. Register today!">
  <script type='text/javascript' src='donors.js'></script>
  <link rel="stylesheet" href="bbb-styles.css">
 </head>
 <body>
  
 <div class="left" ><ul id="menu" ><li ><a href="Registerfree.html">Register Free</a></li><li ><a href="Whydonotblood.html">Why Donate Blood?</a></li><li ><a href="Whoneedsblood.html">Who Needs Blood?</a></li><li ><li ><a href="Contactus.html">Contact Us</a></li><li ><a href="Recipientlogin.html">Recipient Login</a></li><li ><a href="Employeelogin.html">Employee Login</a></li></ul></div><br clear="all"><div style="height:8px"></div>
<div class="left" style="width:563px;">
	<div class="left"></div><div class="clear"></div>
	<div class="left" style="width:561px;border:1px solid #D7D7D7;border-top:0px;border-bottom:0px;">
		<div class="left" style="width:561px;">
			<div style="background: url(images/div-spheadbg-crv.gif) no-repeat; width:561px; height:50px;"><p style="padding-top:10px;padding-left:15px;"><font class="headtxt">Add A New Employee
			</font></p></div>
			<div class="left" style="width:10px;"></div>
			<div class="left" style="width:541px;">
				<div class="left" style="width:535px;">	
					<div style="padding:20px;">
						<p>	
						<form action="newempp.php" id="EmploymentApplication100" method="post" onsubmit="return ValidateForm(this);">
<script type="text/javascript">
function ValidateForm(frm) {
if (frm.First_Name.value == "") { alert('Name is required.'); frm.First_Name.focus(); return false; }
if (frm.EmpID.value == "") { alert('Employee ID is required.'); frm.First_Name.focus(); return false; }
if (frm.Password.value == "") { alert('Password is required.'); frm.First_Name.focus(); return false; }
if (frm.Email_Address.value == "") { alert('Email address is required.'); frm.Email_Address.focus(); return false; }
if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) { alert('Please enter a valid email address.'); frm.Email_Address.focus(); return false; }
if (frm.Position.value == "") { alert('Position is required.'); frm.Position.focus(); return false; }
if (frm.Phone.value == "") { alert('Phone is required.'); frm.Phone.focus(); return false; }
return true; }
</script>
<table border="0" cellpadding="3" cellspacing="0">
<tr> <td style="width: 50%">
<label for="First_Name">Employee Name *</label><br />
<input name="name" type="text" maxlength="50" style="width: 260px" />
</td> </tr> <tr> <td colspan="2">
<label for="Email_Address">Email *</label><br />
<input name="email" type="text" maxlength="100" style="width: 535px" />
</td> </tr> 
<tr> <td>
<label for="EmpID">EmpID</label><br /> <input name="EmpID" type="text" maxlength="50" style="width: 260px" /> </td> <td>
<label for="Password">Password </label><br />
<input name="ppassword" type="text" maxlength="50" style="width: 260px" />
</td> </tr>
<tr> <td>
<label for="Phone">Cellphone</label><br /> <input name="phone" type="text" maxlength="50" style="width: 260px" /> </td> <td>
<label for="StartDate">Qualification </label><br />
<input name="Qualification" type="text" maxlength="50" style="width: 260px" />
</td> </tr>
<tr> <td>
<label for="Salary">Salary</label><br /> <input name="Salary" type="text" maxlength="50" style="width: 260px" /> </td> <td>
<label for="StartDate">Start Date </label><br />
<input name="StartDate" type="text" maxlength="50" style="width: 260px"placeholder="yyyy-mm-dd" />
</td> </tr>
<tr> <td colspan="2">
<label for="Reference">Employee Desription</label><br />
<textarea name="Desription" rows="7" cols="40" style="width: 535px"></textarea>
</td> </tr> <tr> <td colspan="2" style="text-align: center;">
<input type="hidden" name="send" value="1"><input type="image" src="submit-button.gif" name="submit" value="Submit"></div>
</td> </tr>
</table>
</form>
						

						
						</p>

					</div>
				</div>
			</div>
			<div class="left" style="width:10px;"></div>
		</div>
	</div>
	<div class="clear"></div>
	<div class="left"></div><div class="clear"></div>
</div>

 <!--{ Right Panel -->
<div class="left" style="width:8px;"></div>
 <div class="left">
 <form name="sfrm"  method="post" style="margin:0px;" action="newsearchresults.php" onsubmit="return iFormCheck();">
	<div style="background: url(images/right-panel-bg-top.jpg) no-repeat top right; width:200px;">
		<div style="background: url(images/right-panel-bg-bottom.gif) no-repeat bottom right; width:200px;">
			<div style="padding: 10px 15px 0px 15px">			
				<font class="headtxt">Find a Donor</font>
				
				<div   style="padding-top:10px;"><B>City :</B><br>
				<div id="city2">
				<select name="city2" id="city2"  style="width:165px;" class="textbox">
				<!-- onchange="return FormTown();" -->
					<option value="" selected> --- Select City ---</option>
					<option value="Chennai" > Chennai			
									</select></div></div>

				<div   style="padding-top:10px;"><B>Area :</B><br>
				<div id="area2">
				<select   id="town2" NAME="town2"  style="width:165px;" class="textbox">
					<option value="" selected> --- Select Area ---</option>
					<option value="Mambakkam" > Mambakkam		<option value="Kandigai" > Kandigai	     <option value="Kelambakkam" > Kelambakkam	     <option value="Chrompet" >     Chrompet	    <option value="Moolacheri" > Moolacheri         <option value="Tambaram" > Tambaram	     <option value="Kovalam" > 	Kovalam		<option value="Thiruvidanhai" > Thiruvidanhai		 	
							                 <option value="6483" > 	                   				</select></div></div>

				<div style="padding-top:10px;"><B>Group :</B><br>
				<select name="bloodgroup2" value="" style="width:165px;" class="textbox">
					<option value="" selected> --- Select Group ---</option>
							<option value="A1+" > A1+			<option value="A1-" > A1-			<option value="A2+" > A2+			<option value="A2-" > A2-			<option value="B+" > B+			<option value="B-" > B-			<option value="A1B+" > A1B+			<option value="A1B-" > A1B-			<option value="A2B+" > A2B+			<option value="A2B-" > A2B-			<option value="AB+" > AB+			<option value="AB-" > AB-			<option value="O+" > O+			<option value="O-" > O-			<option value="A+" > A+			<option value="A-" > A-					</select></div>

				<div class="right" style="padding-top:10px;">
				<input type="hidden" name="search">
		
				<input type="image" src="search-button.gif" width="55" height="21" border="0" alt=""  ></div><br clear="all"><br>
			</div>
		</div></form>
	 </div>
	 <div style="height:8px"></div>
	 <div style="background: url(right-panel-bg-top.jpg) no-repeat top right; width:200px;">
		<div style="background: url(right-panel-bg-bottom.gif) no-repeat bottom right; width:200px;">
			<div align = "left" style="padding: 10px 13px 0px 13px">
				<div  style="padding: 10px 3px;border-bottom: 1px solid #fff;"><a href="Donorsdetails.php" class="headtxt1">Donors' Details</a></div>

				<div  style="padding: 10px 3px;border-top: 1px solid #D2D2D2;border-bottom: 1px solid #fff;"><a href="newemployee.php" class="headtxt1">Add A New Emloyee</a></div>

				<div  style="padding: 10px 0px;border-top: 1px solid #D2D2D2;"><a href="viewemployee.php" class="headtxt1">Employees' Details</a></div>


				<div  style="padding: 10px 3px;border-top: 1px solid #D2D2D2;border-bottom: 1px solid #fff;"><a href="rchangepassword.php" class="headtxt1">Reset Your Password</a></div>

				<div  style="padding: 10px 0px;border-top: 1px solid #D2D2D2;"><a href="Recipientlogout.html" class="headtxt1">Logout</a></div>
			</div><br clear="all">
		</div>
	 </div>

	 <!-- <div style="height:8px"><img src="images/trans.gif" width="1" height="1" border="0" alt=""></div>
	 <div style="background: url(images/right-panel-bg-top.jpg) no-repeat top right; width:200px;">
		<div style="background: url(images/right-panel-bg-bottom.gif) no-repeat bottom right; width:200px;">
			<div style="padding: 20px 20px 0px 20px">
				<div style="background:#fff;width:160px;height:600px;">

				</div>
			</div><br clear="all">
		</div>
	 </div> -->
	
 </div>
 <!-- Right Panel }-->
<br clear="all"> <div style="height:8px"><img src="trans.gif" width="1" height="1" border="0" alt=""></div>

  <div style="border-top: 1px solid #D8D8D8;border-bottom: 4px solid #B70407;text-align:center;">
	 <div style="padding: 8px 0px;"><a href="aboutus.html" class="footerclr">About Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="feedback.html" class="footerclr">Feedback</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="FAQ.html" class="footerclr">FAQ</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="shareyourexpirence.html" class="footerclr">Share Your Experience</a></div>

  </div>

 </div>
 </body>
</html>
