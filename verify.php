 <?php
    
    
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bloodbank"; // Database name 
$tbl_name="donor"; // Table name 

$id=$_GET['donor_id'];



mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="UPDATE $tbl_name SET verified ='Yes' WHERE Donor_ID = '$id'";
$result=mysql_query($sql);

header('Location: Donorsdetails.php');
?>