<!DOCTYPE html>
<html>
<?php
include 'header.html';
?>
<head>
      <style>
    .carda {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      display: inline-block;
      width: 250px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }
    
    .titlea {
      color: grey;
      font-size: 18px;
    }
    
    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #0baae9;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }
    
    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }
    
    button:hover, a:hover {
      opacity: 0.7;
    }
    </style>
</head>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(images/background/3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Our Team</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.html">home &nbsp;/</a>
                </li>
                <li>about us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<h2 style="text-align:center">Our Team</h2>

<div class="carda">
  <img src="images/about/th.jpg"  alt="Arun" style="width:100%">
  <h1>M D R Arun</h1>
  <p class="titlea">Student, Example</p>
  <p>ST Joseph College</p>
  <div style="margin: 24px 0;">
    <a href="#"><i class="fa fa-dribbble"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="#"><i class="fa fa-facebook"></i></a> 
  </div>
  <p><button>Contact</button></p>
</div>
<div class="carda">
    <img src="images/about/th.jpg"  alt="Poriki" style="width:100%">
    <h1>S Porkai Pandiyan</h1>
    <p class="titlea">Student, Example</p>
    <p>ST Joseph College</p>
    <div style="margin: 24px 0;">
      <a href="#"><i class="fa fa-dribbble"></i></a> 
      <a href="#"><i class="fa fa-twitter"></i></a>  
      <a href="#"><i class="fa fa-linkedin"></i></a>  
      <a href="#"><i class="fa fa-facebook"></i></a> 
    </div>
    <p><button>Contact</button></p>
  </div>
  <div class="carda">
    <img src="images/about/th.jpg"  alt="RCB" style="width:100%">
    <h1>v SakthiVel</h1>
    <p class="titlea">Student, Example</p>
    <p>ST Joseph College</p>
    <div style="margin: 24px 0;">
      <a href="#"><i class="fa fa-dribbble"></i></a> 
      <a href="#"><i class="fa fa-twitter"></i></a>  
      <a href="#"><i class="fa fa-linkedin"></i></a>  
      <a href="#"><i class="fa fa-facebook"></i></a> 
    </div>
    <p><button>Contact</button></p>
  </div>
<?php
include 'footer.html';
?>
</html>
