<?php

  $conn = new mysqli('localhost', 'root', '', 'overseas@22');

  $sql1 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0001' ";

  $sql2 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0002' ";

  $sql3 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0003' ";

  $sql4 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0004' ";

  $sql5 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0005' ";

  $sql6 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0006' ";

  $sql7 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0007' ";

  $sql8 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0008' ";

  $sql9 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0009' ";

  $sql10 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0010' ";

  $sql11 = "SELECT DOMAIN, SKILLS_REQUIRED, FOUND_GOOD_AT, ASSOCIATED_COMPANIES FROM `Technologies` WHERE T_ID = 'T0011' ";

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

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Overseas@22-Trending Technologies</title>

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
      p{
        float: right;
      }
     
      div{
        font-size: 14px;
  font-weight: 350;
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
              <li class="nav-item active">
                <a class="nav-link" href="technologies.php">Trending Technologies
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="universities.php">Uplifting Universities</a>
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
 
            <h4><font color=#f5f5f5>NO_1  
           <font color=#ce2828><b>  &nbsp; ARTIFICIAL INTELLIGENCE(AI)</b></font></h4><br>
          
    <div class="technologies"
    <p class="p"><img class="img" src="technologies images/AI.jpg" alt="Pineapple" style="width:45%;height:50%;margin-right:15px;">
<b>AI</b> started its progress decades ago in 1956, which is nothing but the Science and Engineering of <b>making Intelligent machines</b>. It's a technique of getting machines to work like humans. Finding its application in almost every field like <b>social media, finance, medicine, marketing and much more</b>, it's expected that these intelligent machines will take over the world in the next 30 years. Atificial Intelligence aka AI comprises of Machine Learning which in turn invloves Deep Learning.  Machine Learning and Deep Learning aids AI by providing algorithms and neural networks to solve data driven problems. AI also invloves object detection, natural language processing, expert systems and robotics. 
                      <?php

                          while ($tech = mysqli_fetch_assoc($records1)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
</p></div>

<br><br><br><br><br><br><br><br><br>




          <h4><font color=#f5f5f5>NO_2 
           <font color=#ce2828><b>  &nbsp; MACHINE LEARNING(ML)</b></font></h4><br>
          
    <div class="technologies"
    <p class="p"><img class="img" src="technologies images/ML.png" style="width:45%;height:50%;margin-right:15px;"><b>Machine Learning</b> is the concept whixh allows the machine to learn from examples and experiences without being explicitly programmed. All you have to do is to feed the machine with data which is then analysed by the machine. It uses the data to <b>detect patterns in a dataset</b> and adjust program actions accordingly. It enables the machine to find hidden insights using iterative algorithms without exact programs. In this era where we take routes by <b>google maps</b>, shop in <b>amazon</b> and promote <b>self driven cars</b>, Machine Learning takes up the tech world.Machine Learning involves supervised, unsupervised and reinforcement learning. Being an integral part of AI, it's one among the hotly debated topics at present that will transform the world in future.
                      <?php

                          while ($tech = mysqli_fetch_assoc($records2)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
    </p></div>
 <br><br><br><br><br><br><br><br><br>


            <h4><font color=#f5f5f5>NO_3 
           <font color=#ce2828><b>  &nbsp; VIRTUAL REALITY(VR)</b></font></h4><br>

<div class="technologies"
    <p class="p"><img class="img" src="technologies images/VR.jpg" style="width:45%;height:30%;margin-right:15px;">Emerging yourself into a whole different world that is the virtual world is the key concept of the virtual technology. The use of computer technology to create a <b>simulated environment</b> of which we can be a part is it's basic idea. It uses <b>head technology</b> where we move around our head to sense what's happening in our virtual world. This technology which began with monochromatic environment which was just upto 244 pixels wide, now ranges to high definition 3d content and immersive experience that are very close to real life. Primarily applied in the <b>gaming field</b>, virtual reality finds its application in <b>research, business and therapy</b> too.
                    <?php

                          while ($tech = mysqli_fetch_assoc($records3)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
</p></div>

<br><br><br><br><br><br><br><br><br><br>
           <h4><font color=#f5f5f5>NO_4
           <font color=#ce2828><b>  &nbsp; AUGMENTED REALITY(AR)</b></font></h4><br>
<div class="technologies"
    <p class="p"><img class="img" src="technologies images/AR.jpeg" style="width:45%;height:50%;margin-right:15px;"><b>AR </b>is the concept of mixing the real world with virtual objects and that creates beauty. This is the reason why it's referred to as Mixed Reality at times. It invloves <b>supplementing a person's real life with computer generated virtual images</b>. Initiated by the company magically in 2014, today google invests 2.3 billion dollars on this technology. The Augumented Reality can be seen as the oculus rift of air technology and have been making great advancements in content usage and the high-definition of wide-angle view.The most popular mobile application Snapchat employs AR where we view the virtual face. Apart from gaming, AR finds innovative applications in <b>google glass and hololens by microsoft</b>. 
                      <?php

                          while ($tech = mysqli_fetch_assoc($records4)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
</p></div>
<br><br><br><br><br><br><br><br><br>



           <h4><font color=#f5f5f5>NO_5
           <font color=#ce2828><b>  &nbsp; ROBOTICS PROCESS AUTOMATION(RPA)</b></font></h4><br>
<div class="technologies"
    <p class="p"><img class="img" src="technologies images/RPA.jpg" style="width:45%;height:50%;margin-right:15px;"><b>Robotic Process Automation(RPA)</b> is the use of software with Artificial Intelligence(AI) and Machine Learning(ML) capabilities to handle high- volume, repeated tasks that were previously done by humans. It's a configuration that <b>automates repeated tasks</b>. Moreover, RPA is a form of automation that sticks to the front-end of the machine without having to move to the back-end. It's important to know that RPA is NOT like humanoid robots, cannot replace humans or something that replicates human cognitive functions. With rich analytical suite and ensuring simple creation of bots and security industries like <b>banking & finance, Human resources, marketing & sales and IT integration</b> are beginning to adopt RPA on large scale.
                      <?php

                          while ($tech = mysqli_fetch_assoc($records5)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
    </p></div>


<br><br><br><br><br><br><br><br><br>




           <h4><font color=#f5f5f5>NO_6
           <font color=#ce2828><b>  &nbsp; HUMAN AUGMENTATION</b></font></h4><br>

<div class="technologies"
    <p class="p"><img class="img" src="technologies images/HA.png" style="width:45%;height:50%;margin-right:15px;"><b>Human augmentation</b> is a field of research that aims to enhance human abilities through medicine or technology. This has historically been achieved by consuming chemical substances that improve a selected ability or by installing implants which require medical operations.Modern advancements in many areas of IT have led to a greater variety of implants and other technologies that could be classed as human augmentation.Human augmentation may also be called <b>human 2.0</b>.Examples of human-augmentation applications include devices and implants that contribute to advanced sensory capabilities, such as <b>glasses for viewing augmented visual content</b>, next-generation <b>cochlear implants for auditory sensing and processing</b>, <b>limb prostheses</b> or devices that enhance muscle functioning.
                     <?php

                          while ($tech = mysqli_fetch_assoc($records6)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
     </p></div>

<br><br><br><br><br><br><br><br><br>


    <h4><font color=#f5f5f5>NO_7
           <font color=#ce2828><b>  &nbsp; 5G NETWORK</b></font></h4><br>


<div class="technologies"
    <p class="p"><img class="img" src="technologies images/5G.jpg" style="width:45%;height:50%;margin-right:15px;">5G is the <b>5th generation mobile network</b>. It is a new global wireless standard after 1G, 2G, 3G, and 4G networks. 5G enables a new kind of network that is designed to connect virtually everyone and everything together including machines, objects, and devices.Currently being used by South Korea, the United Kingdom, Germany and the United States, this evolving network will be seen predominant in the upcoming years. While 4G tops out at a theoretical 100 megabits per second (Mbps), 5G tops out at 10 gigabits per second (Gbps). That means 5G is <b>a hundred times faster than the current 4G technology</b>—at its theoretical maximum speed. That speed is critical for autonomous cars, where timely decisions need to be made to avoid crashes.
                     <?php

                          while ($tech = mysqli_fetch_assoc($records7)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
    </p></div>
<br><br><br><br><br><br><br><br><br>


     <h4><font color=#f5f5f5>NO_8
           <font color=#ce2828><b>  &nbsp; DISTRIBUTED CLOUD</b></font></h4><br>

<div class="technologies"
    <p class="p"><img class="img" src="technologies images/DC.jpeg" style="width:45%;height:50%;margin-right:15px;"><b>Distributed cloud</b> is the application of cloud computing technologies to interconnect data and applications served from multiple geographic locations. Distributed, in an information technology (IT) context, means that something is shared among multiple systems which may also be in different locations.While distributed computing spreads computation workload across multiple, interconnected servers, distributed cloud computing generalizes this to the cloud infrastructure itself. A distributed cloud is an execution environment where application components are placed at appropriate <b>geographically-dispersed locations</b> chosen to meet the requirements of the application.
                     <?php

                          while ($tech = mysqli_fetch_assoc($records8)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
</p></div>

<br><br><br><br><br><br><br><br><br>



<h4><font color=#f5f5f5>NO_9
           <font color=#ce2828><b>  &nbsp; BLOCKCHAIN</b></font></h4><br>

<div class="technologies"
    <p class="p"><img class="img" src="technologies images/blockchain.jpg" style="width:45%;height:50%;margin-right:15px;">
      <b>Blockchain technology </b>is a structure that stores transactional records, also known as the block, of the public in several databases, known as the “chain,” in a <b>network connected through peer-to-peer nodes</b>. Typically, this storage is referred to as a <b>'digital ledger'</b>. It is well known that blockchain technology can be used to build cryptocurrency. Bitcoin is a working example of this. Blockchain technology enables electronic transactions that are resilient even when large amounts of money are at stake.In the future, blockchain technology will make this management/regulation immutable and instantaneous.
                     <?php

                          while ($tech = mysqli_fetch_assoc($records9)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
</p></div>

<br><br><br><br><br><br><br><br><br>



<h4><font color=#f5f5f5>NO_10
           <font color=#ce2828><b>  &nbsp; QUANTUM COMPUTING</b></font></h4><br>


<div class="technologies"
    <p class="p"><img class="img" src="technologies images/QC.jpg" style="width:45%;height:50%;margin-right:15px;"><b>Quantum computing</b> is the use of quantum-mechanical phenomena such as superposition and entanglement to perform computation. A quantum computer, implemented theoretically or physically, is used to perform such computation.Quantum computing takes advantage of the strange ability of <b>subatomic particles to exist in more than one state at any time</b>. Due to the way the tiniest of particles behave, operations can be done much more quickly and use less energy than classical computers. Quantum computing uses quantum bits, or <b>'qubits'</b> instead.Qubits can hold up to two bits of data and transmit data between qubits up to 1400 meters apart.
                     <?php

                          while ($tech = mysqli_fetch_assoc($records10)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
     </p></div>

<br><br><br><br><br><br><br><br><br>

<h4><font color=#f5f5f5>NO_11
           <font color=#ce2828><b>  &nbsp; CRYPTOGRAPHY</b></font></h4><br>


<div class="technologies"
    <p class="p"><img class="img" src="technologies images/cryptography1.jpg" style="width:45%;height:50%;margin-right:15px;"><b>Cryptography</b> is technique of securing information and communications through use of codes so that only those person for whom the information is intended can understand it and process it. Thus <b>preventing unauthorized access to information</b>. The prefix “crypt” means “hidden” and suffix graphy means “writing”.In Cryptography the techniques which are use to protect information are obtained from mathematical concepts and a set of rule based calculations known as <b>algorithms to convert messages in ways that make it hard to decode it</b>.These algorithms are used for cryptographic key generation, digital signing, verification to protect data privacy, web browsing on internet and to protect confidential transactions such as credit card and debit card transactions.
                     <?php

                          while ($tech = mysqli_fetch_assoc($records11)){
                          echo"<br><br><b><font color=#1464F4>DOMAIN&nbsp;&nbsp;</font></b>".$tech['DOMAIN']." <br>";
                          echo"<br><b><font color=#1464F4>SKILLS REQUIRED&nbsp;&nbsp;</font></b>".$tech['SKILLS_REQUIRED']."<br>";
                          echo"<br><b><font color=#1464F4>FOUND GOOD AT&nbsp;&nbsp;</font></b>".$tech['FOUND_GOOD_AT']."<br>";
                          echo"<br><b><font color=#1464F4>ASSOCIATED COMPANIES&nbsp;&nbsp;</font></b>".$tech['ASSOCIATED_COMPANIES']."<br>";
                        }
                        ?>
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
