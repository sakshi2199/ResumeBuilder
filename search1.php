<html>
<body>
<style>
body
{
	border: 2px solid black;
	padding-left: 10px;
	padding-right: 10px;
	padding-top: 10px;
	padding-bottom:10px;
	
}
</style>
<?php
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname ="resume";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) 
	{
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
	else 
	{


$sql = "SELECT * From sakshi where Name='".$_POST['search']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	{
    while($row = $result->fetch_assoc())
		
 {
        echo "<h1 style='text-align:center'><b><ins>RESUME</ins></b></h1>";
        echo "<hr>";
        echo "<h2><b>PERSONAL DETAILS:</b></h2>";
	    echo "<br>";
        echo "<b>NAME : </b>".$row["Name"]."<br>";
		echo "<br>";
        echo "<b>DOB : </b>".$row["Age"]."<br>";
		echo "<br>";
        echo "<b>EMAIL : </b>".$row["Email"]."<br>";
		echo "<br>";
        echo "<b>CONTACT : </b>".$row["Contact"]."<br>";
		echo "<br>";
	    echo "<b>ADDRESS : </b>".$row["Address"]."<br>";  
		echo "<br>";
		
		echo "<hr>";
  echo "<h2><b>EDUCATION DETAILS:</b></h2>";

echo "<h3>CLASS 10th:</h3>"  .$row["ten"]."";

echo "<h3>CLASS 12th:</h3>"  .$row["twe"]."";

echo "<h3>COLLEGE:</b></h3>".$row["college"]."";
echo "<hr>";

echo "<h2><b>OTHER DETAILS:</b></h2>";

echo "<h3><b>PROFESSIONAL OBJECTIVES: </b></h3><br>".$row["Professional_Objective"]."";
echo "<br>";


echo "<h3><b>EXPERIENCE:</b></h3><br>".$row["Experience"]."";
echo "<br>";


echo "<h3><b>PROJECTS:</b></h3><br>".$row["Projects"]."";
echo "<br>";


echo "<h3><b>SOFT KILLS:</b></h3><br>".$row["Soft_Skills"]."";
echo "<br>";



echo "<h3><b>HARD SKILLS:</b></h3><br>".$row["Hard_Skills"]."";
echo "<br>";

echo"<h3><b>TRAINING AND WORKSHOPS ATTENDED:</b></h3><br>".$row["Training"]."";
echo"<br>";

echo"<h3><b>POSITION OF RESPONSIBILITY:</b></h3><br>".$row["Position"]."";
echo"<br>";

echo"<h3><b>LANGUAGES AND TECHNOLOGY:</b></h3><br>".$row["Languages"]."";
echo"<br>";


echo "<h3><b>REFERENCES:</b></h3><br>".$row["Reference"]."";
echo"<br>";


echo"<h3><b>HOBBIES AND INTERESTS:</b></h3><br>".$row["Hobbies"]."";
echo"<br>";


 }
 
} 
}
else 
{
    echo "0 results";
}
$conn->close();

	}
?>
</body>
</html>