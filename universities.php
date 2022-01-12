<?php

  $conn = new mysqli('localhost', 'root', '', 'overseas@22');

  $sql1 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0001' ";

  $sql2 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0002' ";

  $sql3 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0003' ";

  $sql4 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0004' ";

  $sql5 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0005' ";

  $sql6 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0006' ";

  $sql7 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0007' ";

  $sql8 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0008' ";

  $sql9 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0009' ";

  $sql10 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0010' ";

  $sql11 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0011' ";

  $sql12 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0012' ";

  $sql13 = "SELECT LOCATION, ESTABLISHED_AT, POPULATION, GOOD_AT, RENOWNED_ALUMNI, ACCESSIBLE_COMPANIES, PERIOD_OF_ADMISSION, CONTACT FROM `Universities` WHERE U_ID = 'U0013' ";

  $records1 = mysqli_query($conn, $sql1);
  $records2 = mysqli_query($conn, $sql2);
  $records3 = mysqli_query($conn, $sql3);
  $records4 = mysqli_query($conn, $sql4);
  $records5 = mysqli_query($conn, $sql5);
  $records6 = mysqli_query($conn, $sql6);
  $records7 = mysqli_query($conn, $sql7);
  $records8 = mysqli_query($conn, $sql8);
  $records9 = mysqli_query($conn, $sql9);
  $records10 = mysqli_query($conn, $sql10);
  $records11 = mysqli_query($conn, $sql11);
  $records12 = mysqli_query($conn, $sql12);
  $records13 = mysqli_query($conn, $sql13);
  

?>





<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Overseas@22-Uplifting Universities</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <style>
      body{
          background-color: #000000;
      
      }
      img{
        float: left;
      }
     .inColumn{
  display:grid;
  grid-template-rows:repeat(auto-fill,auto);
  grid-gap:15px;
}
    ul li h6{
      margin-left: 50%;
    }

     
    </style>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Overseas<em>@22</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="Student.html">Student</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Professor.html">Professor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Counselling.html">Counselling</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="technologies.php">Trending Technologies
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="universities.php">Uplifting Universities</a>
                  <span class="sr-only">(current)</span>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mandatories.html">Mandatories</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="exams.php">Exams to crack</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="institutes.html">Coaching institutions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="scholarships.php">Scholarships</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<h4><font color=#f5f5f5>NO_1
           <font color=#ce2828><b>  &nbsp; STANFORD UNIVERSITY</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/stanford.jpg" style="width:26%;height:26%;margin-right:15px;" alt="Avatar" class="avatar">
                     <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records1)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>
    <br><br><br><br>


    <h4><font color=#f5f5f5>NO_2
           <font color=#ce2828><b>  &nbsp; CARNEGIE MELLON UNIVERSITY(CMU)</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/CMU.jpg" style="width:26%;height:50%;margin-right:15px;" alt="Avatar" class="avatar">

    <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records2)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
                     
    </p></div>
    <br><br><br><br>

    <h4><font color=#f5f5f5>NO_3
           <font color=#ce2828><b>  &nbsp;MASSACHUSETTS INSTITUTE OF TECHNOLOGY(MIT)</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/MIT.jpg" style="width:26%;height:50%;margin-right:15px;" alt="Avatar" class="avatar">
                     <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records3)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>
    <br><br><br><br>

    <h4><font color=#f5f5f5>NO_4
           <font color=#ce2828><b>  &nbsp; UNIVERSITY OF CALIFORNIA,BERKELEY</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/UCB.jpg" style="width:26%;height:50%;margin-right:15px;" alt="Avatar" class="avatar">
                     <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records4)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>
    <br><br><br><br>

    <h4><font color=#f5f5f5>NO_5
           <font color=#ce2828><b>  &nbsp; UNIVERSITY OF OXFORD</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/Oxford.jpg" style="width:26%;height:50%;margin-right:15px;" alt="Avatar" class="avatar">
                    <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records5)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>
    <br><br><br><br><br>

    <h4><font color=#f5f5f5>NO_6
           <font color=#ce2828><b>  &nbsp; UNIVERSITY OF CAMBRIDGE</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/Cambridge.jpg" style="width:26%;height:50%;margin-right:15px;">
                     <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records6)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>
    <br><br><br><br>

    <h4><font color=#f5f5f5>NO_7
           <font color=#ce2828><b>  &nbsp; HARVARD UNIVERSITY</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/Harvard.jpg" style="width:26%;height:50%;margin-right:15px;" alt="Avatar" class="avatar">
                     <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records7)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>
    <br><br><br><br>

    <h4><font color=#f5f5f5>NO_8
           <font color=#ce2828><b>  &nbsp; ETH ZURICH</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/ETH.jpg" style="width:26%;height:50%;margin-right:15px;" >
                     <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records8)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>
    <br><br><br><br>

     <h4><font color=#f5f5f5>NO_9
           <font color=#ce2828><b>  &nbsp; NATIONAL UNIVERSITY OF SINGAPORE</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/NUS.jpg" style="width:26%;height:10%;margin-right:15px;" alt="Avatar" class="avatar">
                     <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records9)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>
    <br><br><br><br>


    <h4><font color=#f5f5f5>NO_10
           <font color=#ce2828><b>  &nbsp;UNIVERSITY OF PITTSBURGH</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/pitt.png" style="width:26%;height:50%;margin-right:15px;" alt="Avatar" class="avatar">
                    <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records10)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>

    <br><br><br><br>


    <h4><font color=#f5f5f5>NO_11
           <font color=#ce2828><b>  &nbsp;UNIVERSITY OF MICHIGAN</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/michigan.png" style="width:26%;height:50%;margin-right:15px;" alt="Avatar" class="avatar">
                     <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records11)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>

    <br><br><br><br>


    <h4><font color=#f5f5f5>NO_12
           <font color=#ce2828><b>  &nbsp;CORNELL UNIVERSITY</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/cornell2.png" style="width:26%;height:50%;margin-right:15px;" alt="Avatar" class="avatar">
                     <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records12)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>

     <br><br><br><br>


    <h4><font color=#f5f5f5>NO_13
           <font color=#ce2828><b>  &nbsp;OKLAHAMA STATE UNIVERSITY</b></font></h4><br>
<div class="universities">
    <img  src="Universities images/ou.png" style="width:26%;height:25%;margin-right:15px;" alt="Avatar" class="avatar">
                     <ul>

                      <?php

                          while ($universities = mysqli_fetch_assoc($records13)){

                              echo"<li><b><font color=#1464F4>LOCATION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b>".$universities['LOCATION']."</li><br>";

                              echo"<li><b><font color=#1464F4>ESTABLISHED_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ESTABLISHED_AT']."</li><br>  ";


                              echo"<li><b><font color=#1464F4>GOOD_AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['GOOD_AT']."</li><br>";

                              echo"<li><b><font color=#1464F4>RENOWNED_ALUMNI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['RENOWNED_ALUMNI']."</li><br>";

                              echo"<li><b><font color=#1464F4>ACCESSIBLE_COMPANIES &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['ACCESSIBLE_COMPANIES']."</li><br>";

                              echo"<li><b><font color=#1464F4>PERIOD_OF_ADMISSION&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['PERIOD_OF_ADMISSION']."</li><br>";

                              echo"<li><b><font color=#1464F4>CONTACT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></font>".$universities['CONTACT']."</li><br>";

                      }
                      ?>
                        
                     </ul>
    </p></div>
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#f8f6f1';
          }
      }
    </script>


  </body>

</html>
