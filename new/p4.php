<?php

session_start();

$conn=mysql_connect("localhost","root","")or die(mysql_error());

$b=mysql_Select_db("passportas");

$sq="SELECT * FROM db";

$result=mysql_query($sq);

$row = mysql_fetch_array($result);

if($result = mysql_query($sq))
{
  if(mysql_num_rows($result) > 0)
{

echo "<html><head><style>

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
width:90%;
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
</style>
</head><body bgcolor='pink'><center>";

echo "<h3>POLICE</h3><br><hr size='10' color='#a26567'><br>THESE ARE THE PEOPLE TO BE VERIFIED<br>";

echo "<table border='12'>";
            echo "<tr>";
                echo "<th>NAME</th>";
                echo "<th>AGE</th>";
                echo "<th>GENDER</th>";
		 echo "<th>DOB</th>";
                echo "<th>FATHERNAME</th>";
		 echo "<th>MOTHERNAME</th>";
                echo "<th>AADHAR</th>"; 
		echo "<th>PHONE NO</th>";
                echo "<th>ADDRESS</th>";
	 	echo "<th>OCCUPATION</th>";
                echo "<th>QUALIFICATION</th>"; 
		echo "<th>PAN NO</th>";
		echo "<th>VERIFY</th>";
                echo "<th>CANCEL</th></tr>";

        while($row = mysql_fetch_array($result))
      {
          if($row['verify1']=='YES')
           {
		$saa=$row['name'];
          echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
		echo "<td>" . $row["father"]."</td>";
		echo "<td>" . $row['mother'] . "</td>";
                echo "<td>" . $row['aadhar'] . "</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
		echo "<td>" . $row['occupation']."</td>";
                echo "<td>" . $row['qualification'] . "</td>";
                echo "<td>" . $row['pan'] . "</td>";
		echo "<td>";
		echo "<a href='p44.php?name=$saa&ver=YES'>";
		echo "<input type='submit'/>";
		echo "</a></td><td>";
                echo"<a href='p44.php?name=$saa&ver=NO'>";
		echo "<input type='submit' />";
		echo "</a></td></tr>";


		   }}
        echo "</table><br><br><br><hr size='10' color='#a26567'></html>";


 echo '</center></body>';
}}
mysql_free_result($result);
echo"<a href='p1.html'>LOGOUT</a>";
?>
