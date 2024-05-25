<?php
include ('C:\xampp\htdocs\medic-master\connection.php');
$id= $_GET['apid'];

$res = mysqli_query($conn,"DELETE  FROM appointment where user_id=$id");
if($res){

    echo'<script>
    
    alert("deleted ")
    
    </script>';
    header("location: appointmentshows.php");
}else{
    echo'<script>alert("Something wrong ")</script>'; 
}
?>
