<?php
$a=mysql_connect("localhost","root","")or die(mysql_error());
$b=mysql_Select_db("passportas");
$c=$_GET['name'];
$d=$_GET['password'];
$_SESSION['name']=$c;
$_SESSION['password']=$d;
$s=0;
$sq="SELECT * FROM db";
$result=mysql_query($sq);
if($result = mysql_query($sq))
{
	while($row = mysql_fetch_array($result))
{
    if(($c==$row["name"])&&($d==$row["password"]))
{
        
	header("location:ap.php?name=$c&password=$d");
	$s=1;
}
}}
if($s==0)
{
echo "NOT FOUND,ENTER CORRECT VALUE";
}
?>
