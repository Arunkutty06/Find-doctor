<!DOCTYPE html>
<html>

<?php
include 'connection.php';
include 'header.html';
$cid=$_GET['cid'];

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
    
    $query12 = "INSERT into appointment(cid,did,name,email,mobile,description,Gender,department,doctor_name) VALUES('$caid','$docid','$Name','$Email_Id','$Mobile_No','$Message','$Gender','$department','$doctor_name')";
    $success = $conn->query($query12);
    
     if($success = true ){
         
        echo '<script>alert("sucessfully Sumitted .. Thanks For Contacting Us")</script>';
      
    
     
        
     }
    else 
    {
        echo '<script>alert("Internal Server Error ")</script>';    
    }
    
  
    }
?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>appointment</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->
<?php 
$ret=mysqli_query($conn,"select * from cateory where id='$cid'");
while($row=mysqli_fetch_array($ret))
{

?>
<!-- Contact Section -->
<section class="blog-section section style-three pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-area style-two">
                    <div class="section-title">
                        <h3>Request <span>Appointment</span></h3>
                    </div>
                    <form class="default-form contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="Name" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="Email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                <input type="text" name="department" placeholder="department"value="<?php echo $row['cateory_name']; ?>" readonly required="">
                                <input type="hidden" name="departmentid" placeholder="department"value="<?php echo $cid; ?>" readonly required="">
                                </div>                            
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="number" name="Phone" placeholder="Phone" required="">
                                </div>
                                <div class="form-group">
                                  <select type="text" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    </select>
                               </div>
                                <!-- <div class="form-group">
                                    <input type="text" name="Date" placeholder="Date" required="" id="datepicker">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </div>  -->
                                <?php 
$retd=mysqli_query($conn,"select * from doctor_login where id='$row[did]'");
while($rowd=mysqli_fetch_array($retd))
{

?>
                                <div class="form-group">
                                <input type="text" name="doctor" placeholder="Doctor"value="<?php echo $rowd['fullname'] ?>" readonly required="">
                                <input type="hidden" name="doctorid" placeholder="Doctor"value="<?php echo $row['did']; ?>" readonly required="">

                                </div>                            
                            </div>
                            <?php}?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" placeholder="Your Message" required=""></textarea>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="submit" class="btn-style-one">submit now</button>
                                </div>                            
                            </div>
                        </div>
                    </form>
                </div>                      
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="appointment-image-holder">
                    <figure>
                        <img src="images/background/appoinment.jpg" alt="Appointment">
                    </figure>
                </div>                       
            </div>
        </div>                    
    </div>
</section>
<!-- End Contact Section -->

<!--team section-->
<section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Expert
                <span>Doctors</span>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum 
                <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="images/team/doctor-2.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Robert Barrethion</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="appointment.php?cid=1" class="btn btn-main">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="images/team/doctor-lab-3.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Arya Stark</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="appointment.php?cid=0" class="btn btn-main">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="images/team/event-2.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Sansa Stark</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="appointment.php?cid=2" class="btn btn-main">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End team section-->

<?php
}
}
include 'footer.html';
?>

</html>
