 <?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bloodbank"; // Database name 
$tbl_name="samo"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
    if (isset($_POST['q1'])){
        $q1 = $_POST['q1'];
        mysql_query("INSERT INTO samo (radio) VALUES ('$q1')");
    }
    ?>