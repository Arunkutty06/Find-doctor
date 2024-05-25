<?php
session_start();
include 'C:\xampp\htdocs\medic-master\connection.php';
if($_SESSION['uid']==''){
 
	header("location: login.php");
}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Doctor Appointment</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="all.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Doctor</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="favicon.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">🅵IN🅳OCTOR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="user7-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Wellcome Dr.<?php echo $_SESSION['username'];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="./DoctorDasboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>          
          <li class="nav-item">
            <a href="appointmentshows.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Appointments
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="edit-profile.php" class="nav-link">
              <i class="nav-icon fa fa-user" aria-hidden="true"></i>
                 <p>
                   Edit Profile
                   <i class="fas fa-angle-left right"></i>
                 </p>
             </a>           
          </li>
          <li class="nav-item">
              <a href="change-password.php" class="nav-link">
              <i class="nav-icon fa fa-key"></i>
                 <p>
                   Change Password
                   <i class="fas fa-angle-left right"></i>
                 </p>
             </a>           
          </li>
          <li class="nav-header">MORE</li>
          <li class="nav-item">
            <a href="calender.php" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/medic-master/gallery.php" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
            <i class="nav-icon fa fa-power-off"></i>
              <p>
                 Logout
              </p>
            </a>
          </li>         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Right side Dashboard -->
  <!-- Content Wrapper. Contains page content & page align -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Doctor Admin</h1>
            <?php
include ('C:\xampp\htdocs\medic-master\connection.php');
$result = mysqli_query($conn,"SELECT * FROM appointment where did=$_SESSION[uid]");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-hover table-striped'>
<tr>
<td>Name</td>
<td>Email</td>
<td>Mobile</td>
<td>Gender</td>
<td>description</td>
<td>Action</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td> 
<td><?php echo $row["mobile"]; ?></td>
<td><?php echo $row["Gender"]; ?></td>
<td><?php echo $row["description"]; ?></td>
<td> <a href="deleteapp.php?apid=<?php echo $row['user_id'];?>"><i class="nav-icon fas fa-trash"></i></a></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>




          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- <div class="content"> -->
     
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="Index.html">FinDocs</a>.</strong>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
</body>
</html>