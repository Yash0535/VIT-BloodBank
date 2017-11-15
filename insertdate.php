<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bloodbank"; // Database name 
$tbl_name="date"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$insertdate = date("d-m-Y", strtotime("1995-11-04"));
$sql = "INSERT into date (data) VALUES ('1995-22-04')";
$result=mysql_query($sql);
        
?>