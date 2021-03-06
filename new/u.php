<?php
$x=mysql_connect("localhost","root","")or die(mysql_error());
$y=mysql_Select_db("passportas");
$a=$_POST['name'];

$sq="SELECT * FROM db where name='$a'";

$result=mysql_query($sq);

$row = mysql_fetch_array($result);

$e=$_POST['father'];
$f=$_POST['mother'];
$g=$_POST['aadhar'];
$p=$_POST['phone'];
$q=$_POST['address'];
$h=$_POST['occupation'];
$i=$_POST['qualification'];
$j=$_POST['pan'];
$l="UPDATE db SET father='$e',mother='$f',aadhar='$g',phone='$p',address='$q',occupation='$h',qualification='$i',pan='$j' WHERE name='$a'";
if($e!='')
{
$m=mysql_query($l) or die(mysql_error());

}
else
{
$m=0;
echo "!!!Please fill all the columns";
}
if($m==0)
{
echo "-------------";
echo "Cannot Update";

}
else
{
//mysql_free_result($result);
 
	header("location:upl.php?name=$a");
}
?>


