 <?php
    
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bloodbank"; // Database name 
$tbl_name="shareyourexp"; // Table name 
$name=$_POST['name'];
$experience=$_POST['experience'];
$email=$_POST['email'];

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

    $sql="INSERT INTO $tbl_name (Name,Email_ID,Experience) VALUES ('$name','$email','$experience')";
    $result=mysql_query($sql);
    header('Location: expinsert.html');
?>