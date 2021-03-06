<?php
$x=mysql_connect("localhost","root","")or die(mysql_error());
$y=mysql_Select_db("passportas");
?>

<html>
<body bgcolor="pink">
<center><h2><br><br><br><br><br><br>
<form method='post' action='upl.php' enctype='multipart/form-data'>
<u>ENTER YOUR NAME</u><br><br>
NAME:<input type='text' name='name'/><br><br><u>
SELECT A PASSPORT SIZE IMAGE TO UPLOAD</u><br><br><br> 
<input type='file' name='image'/><br><br>
<input type='submit' name='btn' value='upload'/>
</form></h2>
</center>
</body>
</html>

<?php
if(isset($_POST['btn']))
{
$n=$_POST['name'];

$imag=$_FILES['image']['tmp_name'];
$image1=$_FILES['image']['name'];
$image2=$_FILES['image']['type'];
$image3="upload/".$image1;

move_uploaded_file($imag,$image3);

$sql="UPDATE db SET image='$image1',it='$image2',path='$image3' WHERE name='$n'";
$result=mysql_query($sql);
header("location:ap.php?name=$n");
}
?>