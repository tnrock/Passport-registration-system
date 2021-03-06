<?php

session_start();

$conn=mysql_connect("localhost","root","")or die(mysql_error());

$b=mysql_Select_db("passportas");

$sq="SELECT * FROM db";

$result=mysql_query($sq);

$row = mysql_fetch_array($result);

$a=$_GET['name'];
$c=$_GET['ver'];
if($c=='YES')
{
$squ="UPDATE db SET verify1='YES' WHERE name='$a'";
$reslt=mysql_query($squ);
}
if($c=='NO')
{
$sqau="UPDATE db SET verify1='NO' WHERE name='$a'";
$reslt=mysql_query($sqau);
}

//$rw = mysql_fetch_array($reslt);

header("location:p3.php")
?>