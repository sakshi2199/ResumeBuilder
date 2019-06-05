<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="internal.css">
</head>
<body>
<?php
if(isset($_POST['name']))
$Name = $_POST['name'];
if(isset($_POST['age']))
$Age = $_POST['age'];
if(isset($_POST['email']))
$Email = $_POST['email'];
if(isset($_POST['contact']))
$Contact = $_POST['contact'];
if(isset($_POST['address']))
$Address= $_POST['address'];
if(isset($_POST['Class_10']))
$ten= $_POST['Class_10'];
if(isset($_POST['Class_12']))
$twe= $_POST['Class_12'];
if(isset($_POST['College']))
$college= $_POST['College'];
if(isset($_POST['ProfessionalObjective']))
$Professional_Objective  = $_POST['ProfessionalObjective'];
if(isset($_POST['Experiences']))
$Experience = $_POST['Experiences'];
if(isset($_POST['Projects']))
$Projects = $_POST['Projects'];
if(isset($_POST['SoftSkills']))
$Soft_Skills = $_POST['SoftSkills'];
if(isset($_POST['Hardskills']))
$Hard_Skills = $_POST['Hardskills'];
if(isset($_POST['Training_WorkshopAttended']))
$Training = $_POST['Training_WorkshopAttended'];
if(isset($_POST['Position_of_Responsibility']))
$Position = $_POST['Position_of_Responsibility'];
if(isset($_POST['Languages_Technology']))
$Languages = $_POST['Languages_Technology'];
if(isset($_POST['References']))
$Reference = $_POST['References'];
if(isset($_POST['Hobbies_Interests']))
$Hobbies = $_POST['Hobbies_Interests'];

if (!empty($Name) || !empty($Age) || !empty($Contact) || !empty($Email) || !empty($Professional_Objective) || !empty($Experience) 
|| !empty($Projects) || !empty($Soft_Skills) || !empty($Hard_Skills) || !empty($Training) 
|| !empty($Position ) || !empty($Languages) || !empty($Reference) || !empty($Hobbies))
{
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
     $INSERT = "INSERT Into sakshi(Name, Age, Email, Contact,Address,ten,twe,college, Professional_Objective, Experience, Projects, Soft_Skills, Hard_Skills, Training,
	 Position, Languages, Reference, Hobbies) values('".$Name."','".$Age."','".$Email."','".$Contact."','".$Address."','".$ten."','".$twe."','".$college."','".$Professional_Objective."','".$Experience."','".$Projects."','".$Soft_Skills."','".$Hard_Skills."','".$Training."','".$Position."','".$Languages."','".$Reference."','".$Hobbies."')";
	if($conn->query($INSERT)===true)
	{
		echo "Data Submitted Go back and Search your Name to view the Resume";   
    }
	else
	{
		echo "Data Not Submitted";
	}
} }else {
 echo "All field are required";
 die();
}

$conn->close();


?>
</body>
</html>