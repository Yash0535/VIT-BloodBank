 <?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="bloodbank"; // Database name 
$tbl_name="employee"; // Table name 
$dob=$_POST['StartDate'];
$name=$_POST['name'];
$mobile=$_POST['phone'];
$EmpID=$_POST['EmpID'];
$mypassword=$_POST['ppassword'];
$Salary=$_POST['Salary'];
$qualification=$_POST['Qualification'];
$EmpDesription=$_POST['Desription'];
$email=$_POST['email'];

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="INSERT INTO $tbl_name (EmpName,EmpSalary,Emp_description,EmpID,password,Emp_cellphone,Emp_qualification,Emp_emailID,StartDate) VALUES ('$name','$Salary','$EmpDesription','$EmpID','$mypassword','$mobile','$qualification','$email','$dob')";
$result=mysql_query($sql);
header('Location: ');
?>