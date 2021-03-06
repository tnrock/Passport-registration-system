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
echo"<html><head><style>

input
{
background-color:pink;
}
b{color:black;}
a
{
text-decoration:none;
font-family:Gill Sans MT;
color:black;
}
body{
color:white;
font-family:Courier New;
width:97%;
margin-left:auto;
margin-right:auto;
min-height:20%;
height:50%
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
</head>
";
echo "<body bgcolor='pink'><h4><center>";

echo "<h3>ADMINISTRATIVE OFFICER</h3><br><hr size='10' color='#a26567'><br>THESE ARE THE PEOPLE TO BE VERIFIED";

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
		echo "<th>PASSWORD</th>";
		echo "<th>FILENO</th><th>VERIFY</th>";
                echo "<th>CANCEL</th></tr>";

        while($row = mysql_fetch_array($result))
      {
          $saa=$row['name'];
          echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
		echo "<td>" . $row["father"]."</td>";
		echo "<td>" . $row['mother'] . "</td>";
                echo "<td>" .$row['aadhar']."</td>";
                echo "<td>" . $row['phone'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
		echo "<td>" . $row['occupation']."</td>";
                echo "<td>" . $row['qualification'] . "</td>";
                echo "<td>".$row['pan']. "</td><td>".$row['password']. "</td><td>".$row['fileno']. "</td>";
		echo "<td>";
		//echo "<form action='p33.php?' method='post'>";
		echo "<a href='p33.php?name=$saa&ver=YES'>";
		echo "<input type='submit'/>";
		echo "</a></td><td>";
                //echo "<td><form action='p33.php?' method='get'>";
		echo"<a href='p33.php?name=$saa&ver=NO'>";
		echo "<input type='submit' />";
		echo "</a></td></tr>";
		   }
        echo "</table><br><br><br><hr size='10' color='#a26567'>";


        // Free result set
 echo '</center></h4></body>';
}}
mysql_free_result($result);
echo"<center><br><b>CONSOLE</b><br>SET FILE NUMBER TO APPLICANT<br>
<form action='msg.php' method='post'><table><tr>
NAME OF APPLICANT<input type='text' name='name'></tr><tr>
<br>FILENO<input type='text' size='50' name='fileno'></tr>
<input type='submit'></table>
</form>
";

echo"<br>DO YOU WANT TO MESSAGE<br>
<form action='msg.php' method='post'><table><tr>
NAME OF APPLICANT<input type='text' name='name'></tr><tr>
<br>MESSAGE<input type='text' size='50' name='msg'></tr>
<input type='submit'></table>
</form>
";

echo "<center><a href='p1.html'>LOGOUT</a></center>";
?>
