<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
 <head>
  <title>VIT Blood Bank - Donate blood & save a life in time!</title> 
  <meta Name="Description" Content="Every 2 seconds, someone needs blood in India. When you donate blood, you save a life in time. Be a donor on BharatBloodbank.com. Register today!">
  <script type='text/javascript' src='donors.js'></script>
  <link rel="stylesheet" href="bbb-styles.css">
 </head>
 <body>
  
 <div><ul id="menu" ><li ><a href="Registerfree.html">Register Free</a></li><li ><a href="Whydonotblood.html">Why Donate Blood?</a></li><li ><a href="Whoneedsblood.html">Who Needs Blood?</a></li><li ><li><a href="Contactus.html">Contact Us</a></li><li ><a href="Recipientlogin.html">Recipient Login</a></li><li ><a href="Employeelogin.html">Employee Login</a></li></ul></div><br clear="all"><div style="height:px"></div>

				
			</font></p>
			</div>
			<div class="left" style="width:px;">
				<div class="left" style="width:850px;">	
					<div style="padding-left: :20px;">
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
                    "country": "A1B+",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A1B+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "A1B-",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A1B-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                 {
                    "country": "A2B+",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A2B+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}							
							?>
                },
                {
                    "country": "A2B-",
                    "visits": <?php
    
							$host="localhost"; // Host name 
							$username="root"; // Mysql username 
							$password=""; // Mysql password 
							$db_name="bloodbank"; // Database name 
							$tbl_name="blood_inventory";
							mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
							mysql_select_db("$db_name")or die("cannot select DB");
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A2B-'";
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

         <div id="chartdiv" style="width: 100%; height: 300px;"></div>

         <p><h3><font color="D70B03"><b>Quantity of Blood in Inventory</b></font></h3></p>
         <left><a href="BloodInventory.php"><img src="goback.jpg" width="150" height="51"/></a></left>

						
						</p>

					</div>
				</div>
			</div>
			<div class="left" style="width:10px;"></div>
		</div>
	</div>
	<div class="clear"></div>

 </body>
</html>
