<?php
if(isset($_GET['submit']))
{
    $name=$_GET['name'];
    $c=mysql_connect("localhost","root","");
    mysql_select_db("bloodbank");
    $ins=mysql_query("insert into selec (selection) values ('$name')",$c);
    if($ins)
    {
        echo "<br>".$name."inserted";
    }
    else
    {
        echo mysql_error();
    }
}
?>s