<?php

session_start();

$conn=mysql_connect("localhost","root","")or die(mysql_error());

$b=mysql_Select_db("passportas");


$c=$_GET['name'];


$sq="SELECT * FROM db where name='$c'";

$result=mysql_query($sq);

$row = mysql_fetch_array($result);


//if(mysql_num_rows($result) > 0)

{
        //while($row = mysql_fetch_array($result))

{

//if(($c=$row["name"])&&($d=$row["password"]))
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
//color:black;
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
button{}
marquee{color:black;
font-size:70;}
html
{
background-color:#a26567;
}
</style>
</head>";
echo "<body bgcolor='pink'><center>";

echo "<h3>APPLICANT</h3><br><br>";

echo"<hr size='10' color='#a26567'>";

echo"<a href='us.php?name=$c'><button>APPLY</button></a><a><button>RENEWAL</button></a><a href='p1.html'><button>LOGOUT</button></a><a href='user.php?name=$c'><button>UPDATE</button></a>";

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
		echo "<th>FILENO</th>";
            echo "</tr>";
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
		echo "<td>" . $row["occupation"]."</td>";
                echo "<td>" . $row['qualification'] . "</td>";
                echo "<td>" . $row['pan'] . "</td>";
		echo "<td>" . $row["password"]."</td>";
             //   echo "<td>" . $row["fileno"]."</td>";
		echo "</tr>";
        
        echo "</table><br><hr><h3>CURRENT STATUS OF YOUR PASSPORT<br><br>";
        // Free result set
if((!($row['verify1']=="YES"))&&(!($row['verify1']=="NO")))
{
echo "WAIT FOR VERIFICATION";
}
if($row['verify1']=="YES")
{
echo "<br><br>FIRST VERIFICATION FINISHED";
}
if($row['verify1']=="NO")
{
echo "<BR>YOUR DETAILS HAVE SOME ISSUES";
}
if($row['verify2']=="YES")
{
echo"<br>SECOND VERIFICATION FINISHED";
echo"<br><a href='passport.php?name=$c'><button>PROCEED</button></a>";
}
if($row['verify1']=="NO")
{
echo "<BR>YOUR DETAILS HAVE SOME ISSUES";
}
echo"<hr size='10' color='#a26567'>";
if($row['msg']!="")
{
echo"<br>MESSAGE:";
echo $row['msg'] ;
}
echo '</center></body></html>';

}}}mysql_free_result($result);
 
?>
