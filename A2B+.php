<?php
                $host="localhost"; // Host name 
              $username="root"; // Mysql username 
              $password=""; // Mysql password 
              $db_name="bloodbank"; // Database name 
              $tbl_name="blood_inventory";
              mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
              mysql_select_db("$db_name")or die("cannot select DB");

              $Quantity = $_GET['Quantity'];
if (isset($_GET['add'])){
    $sql="UPDATE $tbl_name SET Quantity_in_hand = Quantity_in_hand + '$Quantity' WHERE Blood_Group='A2B+'";
  mysql_query($sql);
}
else if (isset($_GET['sub'])){
    $sql="UPDATE $tbl_name SET Quantity_in_hand = Quantity_in_hand - '$Quantity' WHERE Blood_Group='A2B+'";
  mysql_query($sql);
}

header('Location: changeQuantity.php');
              
                        
?>