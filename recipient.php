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
			<div style="background: url(images/div-spheadbg-crv.gif) no-repeat; width:561px; height:50px;"><p style="padding-top:10px;padding-left:15px;"><font class="headtxt">  <?php
    
			$host="localhost"; // Host name 
			$username="root"; // Mysql username 
			$password=""; // Mysql password 
			$db_name="bloodbank"; // Database name 
			$tbl_name="recipient";
			$myusername=$_POST['username']; 
            $mypassword=$_POST['password']; 
			mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
			mysql_select_db("$db_name")or die("cannot select DB");
			$myusername = mysql_real_escape_string($myusername);
			$mypassword = mysql_real_escape_string($mypassword);
			$sql="SELECT * FROM $tbl_name WHERE Recipient_ID ='$myusername' and password='$mypassword'";
			$result=mysql_query($sql);

			// Mysql_num_row is counting table row
			$count=mysql_num_rows($result);

			// If result matched $myusername and $mypassword, table row must be 1 row
			if($count==1){

			// Register $myusername, $mypassword and redirect to file "login_success.php"

			$sql="SELECT Recipient_Name FROM $tbl_name WHERE Recipient_iD =	'$myusername'";
			$result=mysql_query($sql); // Table name
			while($row=mysql_fetch_array($result)){
			echo "Welcome ".$row['Recipient_Name'];
			 }
			}
			else {
			echo "Wrong Username or Password";
			}
			?>
			<p><h3><font color="D70B03"><b>Quantity of Blood in Inventory</b></font></h3></p>
				
			</font></p>
			</div>
			<div class="left" style="width:10px;"></div>
			<div class="left" style="width:541px;">
				<div class="left" style="width:535px;">	
					<div style="padding:20px;">
						<p>	
						 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
						<link rel="stylesheet" href="style.css" type="text/css">
        <script src="amcharts/amcharts.js" type="text/javascript"></script>
        <script src="amcharts/serial.js" type="text/javascript"></script>

        <script>
            var chart;

            var chartData = [
                {
                    "country": "A1+",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A1+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "A1-",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A1-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "A2+",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A2+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "A2-",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A2-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "B+",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='B+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "B-",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='B-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "AB+",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='AB+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "AB-",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='AB-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "O+",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='O+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "O-",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='O-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "A+",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "A-",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                
                
            ];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "country";
                chart.startDuration = 1;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.labelRotation = 90;
                categoryAxis.gridPosition = "start";

                // value
                // in case you don't want to change default settings of value axis,
                // you don't need to create it, as one value axis is created automatically.

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.valueField = "visits";
                graph.balloonText = "[[category]]: <b>[[value]]</b>";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 0.8;
                chart.addGraph(graph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorAlpha = 0;
                chartCursor.zoomable = false;
                chartCursor.categoryBalloonEnabled = false;
                chart.addChartCursor(chartCursor);

                chart.creditsPosition = "top-right";

                chart.write("chartdiv");
            });
        </script>

         <div id="chartdiv" style="width: 100%; height: 400px;"></div>

						
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

				<div  style="padding: 10px 3px;border-top: 1px solid #D2D2D2;"><a href="viewemployee.php" class="headtxt1">Employees' Details</a></div>	

				<div  style="padding: 10px 3px;border-bottom: 1px solid #D2D2D2;"><a href="seefeedback.php" class="headtxt1">See Feedbacks</a></div>

				<div  style="padding: 10px 3px;border-bottom: 1px solid #D2D2D2;"><a href="BloodInventory.php" class="headtxt1">Blood Inventory</a></div>


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
