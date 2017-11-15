<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bloodbank"; // Database name 
$tbl_name="recipient"; // Table name 
$ID=$_POST['ID'];
$oldpassword=$_POST['old'];
$newpassword=$_POST['new'];
$rnewpassword=$_POST['rnew'];
if($newpassword!=$rnewpassword){
	echo "Password Doesn't Match";
}
else{
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysql_select_db("$db_name")or die("cannot select DB");

	$sql="SELECT password FROM $tbl_name where 	Recipient_ID = '$ID'";
	$result=mysql_query($sql);
	while($row=mysql_fetch_array($result)){
        if($oldpassword==$row['password']){
        	$sql="UPDATE $tbl_name SET password = '$newpassword' WHERE Recipient_ID = '$ID'";
			mysql_query($sql);
			echo "Password Change Successfully";
        }
        else
        {
        	echo "Old Password Is Invalid";
        }
}}
?>