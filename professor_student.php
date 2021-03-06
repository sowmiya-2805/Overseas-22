<?php
$conn = new mysqli('localhost', 'root', '', 'overseas@22');

$sql_query = "SELECT * FROM `counsellor_form`";
$sql_data = mysqli_connect($conn, $sql_query);


?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Overseas@22-Professor</title>

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
      ul li{
        float: left;
        font-size: 18px;
      }

      img{
        float: left;
      }

      p{  
        float:left;
        font-size: 18px;
        
      }

      .button {
  background-color: #f33f3f;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
              <li class="nav-item">
                <a class="nav-link" href="index_student.html">Home
                </a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="professor_student.html"><b>Professor</b>
                <span class="sr-only">(current)</span>
              </a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="Teams.html">Discussion Panel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="counselling_student.html">Counselling</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div class="page-heading products-heading header-text">
    <div class="text-content">
              <h4>choose any professor whom you want to work with.<br> you can choose a maximum of 2 professors.</h4></div></div>

  <div class="professors">
  <?php
        while($row = mysqli_fetch_array($sql_data, MYSQLI_ASSOC))
        {

          echo"<ul><img class="img" src="assets/images/professor.png" style="width:270px;height:310px;margin-right:15px;">";
              echo"<li><b><font color=#1464F4>NAME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></li><p>".$row['First_Name']."</p><br><br>";
              echo"<li><b><font color=#1464F4>CURRENT RESEARCH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></li><p>".$row['Current_research']."</p><br><br>";
              echo"<li><b><font color=#1464F4>DEPARTMENT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></li><p>".$row['Department']."</p><br><br>";
              echo"<li><b><font color=#1464F4>COLLEGE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></li><p>".$row['College']."</p><br><br>";
              echo"<li><b><font color=#1464F4>EXPERIENCE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></b></li><p>".$row['Experience']."</p><br><br>";
              echo"<button type="button" class="button"><b>Book</b></button><br>";
            echo"</ul>";
        echo"</div>";
     }     
   ?>   


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