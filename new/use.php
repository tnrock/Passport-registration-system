<?php
$x=mysql_connect("localhost","root","")or die(mysql_error());
$y=mysql_Select_db("passportas");
$a=$_POST['name'];
$b=$_POST['age'];
$c=$_POST['gender'];
$d=$_POST['dob'];
$e=$_POST['father'];
$f=$_POST['mother'];
$g=$_POST['aadhar'];
$p=$_POST['phone'];
$q=$_POST['address'];
$h=$_POST['occupation'];
$i=$_POST['qualification'];
$j=$_POST['pan'];
$k=$_POST['password'];

$l="UPDATE db  SET age='$b',gender='$c',dob='$d',father='$e',mother='$f',aadhar='$g',phone='$p',address='$q',occupation='$h',qualification='$i',pan='$j',password='$k' WHERE name='$a'";
if($a!='')
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
 
	header("location:ap.php?name=$a");
	
}
?>


