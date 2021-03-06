<?php
session_start();
$conn=mysql_connect("localhost","root","")or die(mysql_error());
$b=mysql_Select_db("passportas");
$c=$_GET['name'];
$sq="SELECT * FROM db where name='$c'";
$result=mysql_query($sq);
$row = mysql_fetch_array($result);


echo"<html><head>

<asp:HiddenField ID='hfImageData' runat='server' />
<asp:Button ID='btnExport' Text='Export to Image' runat='server' UseSubmitBehavior='false'
    OnClick='ExportToImage' OnClientClick='return ConvertToImage(this)' />

<style>

input
{
background-color:black;
}
a
{
text-decoration:none;
font-family:Gill Sans MT;
color:black;
//color:black;
}
body{
color:black;
font-size:20;
font-family:Courier New;
wid:80%;
margin-left:auto;
margin-right:auto;
min-height:20%;
height:30%
background-color:#FFFFFF;
border-radius:30px;
-moz-border-radius:20px;
}
button{}
marquee{color:black;
font-size:70;}
html
{
background-color:#a26567;
}
table{font-size:25;border:0}
</style>
</head>";
echo "<body bgcolor='pink'><center>";

echo "<pre><h3>APPLICANT PASSPORT IS READY</h3><br><br>";

echo"<hr height='10'><h3><table border='10' bgcolor='grey' cellpadding='50' cellspacing='10'>";
		echo"<h5><tr><td colspan='2'><center>PASSPORT<br><img src='e.png' width='100' height='200'><br><h5>REPUBLIC OF INDIA</h5></center></td><td>";
                echo "<header><img src='".$row['path']."''  width='150' height='190'/></header>";
		echo "NAME:" . $row['name'] . "<br>";
                echo "AGE:" . $row['age'] . "<br>";
                echo "GENDER:" . $row['gender'] . "<br>";
                echo "DOB:" . $row['dob'] . "<br>";
		echo "FATHERNAME:" . $row["father"]."<br>";
		echo "MOTHETNAME:" . $row['mother'] . "</td><td>";
                echo "AADHAR NO:" . $row['aadhar'] . "<br>";
                echo "PHONE:" . $row['phone'] . "<br>";
                echo "ADDRESS:" . $row['address'] . "<br>";
		echo "OCCUPATION:" . $row["occupation"]."<br>";
                echo "QUALIFICATION:" . $row['qualification'] . "<br>";
                echo "PAN NO:" . $row['pan'] . "<br>";
		echo "PASSWORD:" . $row["password"]."</td></tr></table>";

?>

   