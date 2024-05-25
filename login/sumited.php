<?php
session_start();
error_reporting(0);
include('C:\xampp\htdocs\medic-master\connection.php');
//login
if(isset($_POST['submit']))
  {
    $uname=$_POST['username'];
    $password=$_POST['password'];
    $query=mysqli_query($conn,"select * from doctor_login where  username='$uname' && password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['uid']=$ret['id'];
      $_SESSION['username']=$ret['username'];
	 
     header('location:DoctorDasboard.php');
    }
    else{
		$msgr="addToast('Login Failed','Invalid Email Or Password','error');";
    }
  }

?>