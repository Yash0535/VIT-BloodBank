<?php
$connection = mysql_connect("localhost","root","") or die("Could not connect to the server");
$db=mysql_select_db("bloodbank",$connection) or die("Could not select database");
$query = "SELECT * FROM Recipients";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
echo "<tr>";
echo "<td>", $row['Patient_name'],"</td>", "<td>",$row['Age'],"</td>","</tr>";
}

