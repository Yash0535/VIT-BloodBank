<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <title>VIT Blood Bank - Search Result</title> 
  <meta Name="Description" Content="Every 2 seconds, someone needs blood in India. When you donate blood, you save a life in time. Be a donor on BharatBloodbank.com. Register today!">
  <script type='text/javascript' src='donors.js'></script>
  <link rel="stylesheet" href="bbb-styles.css">
 </head>
 <body>
  
 <div class="left" ><ul id="menu" ><li ><a href="Registerfree.html">Register Free</a></li><li ><a href="Whydonotblood.html">Why Donate Blood?</a></li><li ><a href="Whoneedsblood.html">Who Needs Blood?</a></li><li ><li><a href="Contactus.html">Contact Us</a></li><li ><a href="Recipientlogin.html">Recipient Login</a></li><li ><a href="Employeelogin.html">Employee Login</a></li></ul></div><br clear="all"><div style="height:8px"></div>
<div class="left"></div><div class="clear"></div>
	<div class="left" style="width:561px;border:1px solid #D7D7D7;border-top:0px;border-bottom:0px;">
		<div class="left" style="width:561px;">
				<div style="background: url(div-spheadbg-crv.gif) no-repeat bottom right; width:561px;"><p style="padding-top:0px;padding: 0px 10px 15px 20px;"><font class="headtxt">Search Result</font></p></div>
			<div class="left" style="width:561px; background: url(div-sp-leftbg.gif) no-repeat top left;">
			<div class="left" style="width:561px; background: url(div-sp-rightbg.gif) no-repeat top right;">

				<div style="padding:20px 30px;">
				<form action="" method="post" name="searchresultsfrm">
				<input type="hidden" value="1" name="search">
				<input type="hidden" value="1" name="details">
				<input type="hidden" value="1" name="mode">
				<input type="hidden" value="INGU" name="state">
				<input type="hidden" value="0" name="city">
				<input type="hidden" value="0" name="town">
				<input type="hidden" value="13" name="bloodgroup">
				<input type="hidden" value="13" name="bloodgroup2">

				<div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div><div style="clear:both;"></div>
								<div style="padding: 5px 10px 5px 0px;"><b>Your Search :</b>&nbsp;&nbsp;Blood Group : <b>
								<?php
								$bloodgroup=$_POST['bloodgroup2'];
								echo $bloodgroup;
								?>
								</b>&nbsp;&nbsp;&nbsp;City : <b><?php
								$city=$_POST['city2'];
								echo $city;
								?></b>&nbsp;&nbsp;&nbsp;Area : <b><?php
								$area=$_POST['town2'];
								echo $area;
								?></b></div>
				<div class="dotline"><img src="trans.gif" width="1" height="1" border="0" alt=""></div><div style="clear:both;"></div><br clear="all">
													
							<div style="border-bottom: 1px solid #AAAAAA;padding-bottom:5px;"><div class="left" style="padding-top:5px;">Found:
							<?php
								$host="localhost";
								$username="root"; // Mysql username 
								$password=""; // Mysql password 
								$db_name="bloodbank"; // Database name 
								$tbl_name="donor"; // Table name 
								$bloodgroup=$_POST['bloodgroup2'];
								$city=$_POST['city2'];
								$area=$_POST['town2'];

								// Connect to server and select databse.
								mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
								mysql_select_db("$db_name")or die("cannot select DB");
								$sql="SELECT * FROM $tbl_name WHERE city ='$city' and area ='$area' and blood_group = '$bloodgroup'" ;
								$result=mysql_query($sql);
								$count=mysql_num_rows($result);
								if($area!=""){
								echo $count;
								}
								else{
									$sql="SELECT * FROM $tbl_name WHERE city ='$city' and blood_group = '$bloodgroup'" ;
									$result=mysql_query($sql);
									$count=mysql_num_rows($result);
									echo $count;
								}

							?>
								 <b></b> &nbsp;&nbsp;											
										
							
							
							</div></div>

														
							<div style="padding-top:25px;">
							<?php
								$host="localhost";
								$username="root"; // Mysql username 
								$password=""; // Mysql password 
								$db_name="bloodbank"; // Database name 
								$tbl_name="donor"; // Table name 
								$bloodgroup=$_POST['bloodgroup2'];
								$city=$_POST['city2'];
								$area=$_POST['town2'];

								// Connect to server and select databse.
								mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
								mysql_select_db("$db_name")or die("cannot select DB");
								$sql="SELECT * FROM $tbl_name WHERE city ='$city' and area ='$area' and blood_group = '$bloodgroup'" ;
								$result=mysql_query($sql);
								
								if($area!=""){
								$sql="SELECT Donor_ID,Donor_name,Gender,Date_of_Birth,city,area,Date_of_Donation,Donor_mobile,Residence,Office,verified FROM $tbl_name WHERE city ='$city' and area='$area' and blood_group = '$bloodgroup'" ;
									$result=mysql_query($sql);
									echo $result;
									while($row=mysql_fetch_array($result)){
								echo "<div class='left'>","<b>","Donor ID :","</b>",$row['Donor_ID'],"</div>","<div class='right'>","</div>","<br clear='all'>";
								echo "<div class='searchborder'>";
								echo "<div class='searchbg' >";
								echo "<ul class='list left'>
											<li><b>Name</b></li>
											<li><b>Gender</b></li>
											<li><b>Date_of_Birth</b></li>
											<li><b>Location</b></li>
											<li><b>Last Donated Date</b></li>
										</ul>
										<ul class='list left'>
											<li>".$row['Donor_name']."</li>
											<li>".$row['Gender']."</li>
											<li>".$row['Date_of_Birth']."</li>
											<li>".$row['area'].",".$row['city']."</li>
											<li>".$row['Date_of_Donation']."</li>
										</ul>

										<div class='vdotline left' style='margin-right:15px;'><img src='trans.gif' width='1' height='100' border='0' alt=''></div>

										<ul class='list left'>
										
											<li><b>Mobile</b></li>
											<li><b>Residence</b></li>
											<li><b>Office</b></li>
											<li><b>Verified</b></li>
										</ul>
										<ul class='list left'>
											<!-- <li></li> -->
											<li>".$row['Donor_mobile']."</li>
											<li>".$row['Residence']."</li>
											<li>".$row['Office']."</li>
											<li>".$row['verified']."</li>
										</ul><div style='clear:both;'></div>
									<div class='dotline'><img src='rans.gif' width='1' height='1' border='0' alt=''></div><div style='clear:both;'></div>

									<div style='padding: 10 0px;text-align:right;'>
																		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									

								</div>
							</div>";
							}}
								
								else{
									$sql="SELECT Donor_ID,Donor_name,Gender,Date_of_Birth,city,area,Date_of_Donation,Donor_mobile,Residence,Office FROM $tbl_name WHERE city ='$city' and blood_group = '$bloodgroup'" ;
									$result=mysql_query($sql);
									echo $result;
									while($row=mysql_fetch_array($result)){
								echo "<div class='left'>","<b>","Donor ID :","</b>",$row['Donor_ID'],"</div>","<div class='right'>","</div>","<br clear='all'>";
								echo "<div class='searchborder'>";
								echo "<div class='searchbg' >";
								echo "<ul class='list left'>
											<li><b>Name</b></li>
											<li><b>Gender</b></li>
											<li><b>Date_of_Birth</b></li>
											<li><b>Location</b></li>
											<li><b>Last Donated Date</b></li>
										</ul>
										<ul class='list left'>
											<li>".$row['Donor_name']."</li>
											<li>".$row['Gender']."</li>
											<li>".$row['Date_of_Birth']."</li>
											<li>".$row['area'].",".$row['city']."</li>
											<li>".$row['Date_of_Donation']."</li>
										</ul>

										<div class='vdotline left' style='margin-right:15px;'><img src='trans.gif' width='1' height='100' border='0' alt=''></div>

										<ul class='list left'>
										
											<li><b>Mobile</b></li>
											<li><b>Residence</b></li>
											<li><b>Office</b></li>
										</ul>
										<ul class='list left'>
											<!-- <li></li> -->
											<li>".$row['Donor_mobile']."</li>
											<li>".$row['Residence']."</li>
											<li>".$row['Office']."</li>
										</ul><div style='clear:both;'></div>
									<div class='dotline'><img src='rans.gif' width='1' height='1' border='0' alt=''></div><div style='clear:both;'></div>

									<div style='padding: 10 0px;text-align:right;'>
																		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									

								</div>
							</div>";
							}}
							?>
					  </div>
					  

							
							
					



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
	 <div style="background: url(images/right-panel-bg-top.jpg) no-repeat top right; width:200px;">
		<div style="background: url(images/right-panel-bg-bottom.gif) no-repeat bottom right; width:200px;">
			<br clear="all">
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
