 <?php
    
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bloodbank"; // Database name 
$tbl_name="feedback"; // Table name 
$name=$_POST['name'];
$feedback=$_POST['feedback'];
$email=$_POST['email'];

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

    $sql="INSERT INTO $tbl_name (Name,Email_ID,feedback) VALUES ('$name','$email','$feedback')";
    $result=mysql_query($sql);
    header('Location: feedbackinsert.html');
?>