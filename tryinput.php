
<?php
include('connection.php');
if (isset($_POST['submit'])){

$docid = $conn->real_escape_string($_POST['doctorid']);
$caid = $conn->real_escape_string($_POST['departmentid']);
$Name = $conn->real_escape_string($_POST['Name']);
$Email_Id = $conn->real_escape_string($_POST['Email']);
$Mobile_No = $conn->real_escape_string($_POST['Phone']);
$Gender = $conn->real_escape_string($_POST['gender']);
$Message = $conn->real_escape_string($_POST['form_message']);
$department = $conn->real_escape_string($_POST['department']);
$doctor_name = $conn->real_escape_string($_POST['doctor']);

$query = "INSERT into appointment(cid,did,name,email,mobile,description,Gender,department,doctor_name) VALUES('$caid','$docid','$Name','$Email_Id','$Mobile_No','$Message','$Gender','$department','$doctor_name')";
$success = $conn->query($query);

 if($success = true ){
     
    echo '<script>alert("sucessfully Sumitted .. Thanks For Contacting Us")</script>';
    $Message="Doctor Apoinment request sent"

 
    
 }
else 
{
    echo '<script>alert("Internal Server Error ")</script>';    
}

$conn->close();
}
?>