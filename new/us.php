<?php

$conn=mysql_connect("localhost","root","")or die(mysql_error());

$b=mysql_Select_db("passportas");

$c=$_GET['name'];

$sq="SELECT * FROM db where name='$c'";
$result=mysql_query($sq);

$row = mysql_fetch_array($result);

$d=$row["age"];

{
echo"<html><head><style>

input
{
background-color:pink;
}
a
{
text-decoration:none;
font-family:Gill Sans MT;
color:pink;
}
body{
color:white;
font-family:Courier New;
width:80%;
margin-left:auto;
margin-right:auto;
min-height:20%;
height:30%
background-color:#FFFFFF;
border-radius:30px;
-moz-border-radius:20px;
}
marquee{color:black;
font-size:70;}
html
{
background-color:#a26567;
}
table
{
background-color:#a26567;
}

</style>
</head>";
echo '<body>';
echo'<h2>UPDATE APPLICANT REGISTERATION</h2>
<hr>
<br><PRE><table>
<tr><td>   <form action="u.php" method="post" name="mf2" enctype="multipart/form_data">
<br>NAME..........<input type="text" name="name" value='.$row["name"].'><br>
<br>FATHERNAME....<input type="text" name="father" value='.$row["father"].'><br>
<br>MOTHERNAME....<input type="text" name="mother" value='.$row["mother"].'>	<br>
<br>AADHAR........<input type="text" name="aadhar" value='.$row["aadhar"].'><br>
<br>PHONE.........<input type="text" name="phone" value='.$row["phone"].'><br>
<br>ADDRESS.......<input type="text" name="address" value='.$row["address"].'><br>
<br>OCCUPATION....<input type="text" name="occupation" value='.$row["occupation"].'><br>
<br>QUALIFICATION.<input type="text" name="qualification" value='.$row["qualification"].'><br>
<br>PAN...........<input type="text" name="pan" value='.$row["pan"].'><br>
<br><br><br><input type="submit" value="SUBMIT" name="btn"/></td></tr></table>
</form></PRE>';
echo'</body></html>';
}
?>