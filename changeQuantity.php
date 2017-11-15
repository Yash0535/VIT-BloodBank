<?php
include("dbcon.php");?>
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

				<p><h3><font color="D70B03"><b><h2>Change Quantity of Blood <i></i>n Inventory</h2></b></font></h3></p>

			</font></p>
			</div>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
					     <link rel="stylesheet" href="css/style.css">

						<table class="responstable">
  
  <tr>
    
    <th><span>Blood Group</span></th>
    <th>Available Quantity of Blood</th>
    <th>Change Quantity</th>
 
  </tr>
  
  <tr>
    
    <td>A1+</td>
    	<td><?php
    
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
							?></td>
    <td> <form action="A1+.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

   <tr>
    <td>A1-</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A1-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="A1-.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>A2+</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A2+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="A2+.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>A2-</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A2-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="A2-.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>B+</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='B+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="B+.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>B-</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='B-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="B-.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>A1B+</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A1B+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="A1B+.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>A1B-</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A1B-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="A1B-.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>A2B+</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A2B+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="A2B+.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>A2B-</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A2B-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="A2B-.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>AB+</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='AB+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="AB+.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>AB-</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='AB-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="AB-.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>O+</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='O+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="O+.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>O-</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='O-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="O-.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>A+</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A+'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="A+.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

  <tr>
    <td>A-</td>
    	<td><?php
    
							
							$sql="SELECT Quantity_in_hand FROM $tbl_name WHERE Blood_Group='A-'";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result)){
       				        echo $row['Quantity_in_hand'];
       						}					
							?></td>
    <td> <form action="A-.php" method="get">
    	<input type="submit" name="sub" value="Sub"><input id="A1+" name="Quantity" type="number" size="3"><input type="submit" name="add" value="Add">
    </form></td>
  </tr>

   
  
  
  
  
</table>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js'></script>

  <left><a href="BloodInventory.php"><img src="goback.jpg" width="150" height="51"/></a></left>
			

 </body>
</html>
