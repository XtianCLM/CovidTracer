<?php
         
if (isset($_SESSION)) {
    
    if (isset($_SESSION['citizen_login'])) {
                    
    $Email = $_SESSION['citizen_login'];

             $stmt =(new Connection)->connect()->prepare("SELECT Phone FROM masterlogin WHERE Email = :Email ");

            $stmt->bindParam(":Email", $Email);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                $dbphone = $row["Phone"];
               
            }

            if ($stmt->rowCount()>0) {

                    $phone = $dbphone;

                    }

     } 
     else if (isset($_SESSION['estab_login'])) {
         $Email = $_SESSION['estab_login'];

             $stmt =(new Connection)->connect()->prepare("SELECT Phone FROM masterlogin WHERE Email = :Email ");

            $stmt->bindParam(":Email", $Email);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                $dbphone = $row["Phone"];
               
            }

            if ($stmt->rowCount()>0) {

                    $phone = $dbphone;

                    }
     }
}

    $phonenum = '';
?>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" method="POST" >
            <div class="sidebar-header" >
              
                <strong><i class="fa-solid fa-laptop-medical"></i></strong>
            </div>

            <ul class="list-unstyled components"  >
                     
                <li>
                    <a href="#">
                    <img src="assets/images/person.png" width="25%;"><br><br>
                     <?php
                     
                      if (isset($_SESSION['admin_login'])) {
                                echo $_SESSION['admin_login'];
                         } 

                       else if (isset($_SESSION['citizen_login'])) {
                                echo $_SESSION['citizen_login'];
                         } 

                         elseif (isset($_SESSION['estab_login'])) {
                                echo $_SESSION['estab_login'];
                         } 
                         else{

                         }
                     ?>
    
                    <br><br>
                    <i class="fa-solid fa-phone" style='font-size:24px;margin-bottom:30px;'><span class="contactnum"> <?php echo $phone; ?></span></i>

                </a>
                </li>
                <li>
                    <?php if (isset($_SESSION['citizen_login'])) { ?>
                    <a href="CitizenProfile">
                        <i class="fa-solid fa-user" style='font-size:24px'></i> 
                        Profile
                    </a>
                <?php }  else if (isset($_SESSION['estab_login'])) {  ?>
                  
                    <a href="establishment">
                        <i class="fa-solid fa-user" style='font-size:24px'></i> 
                        Profile
                    </a>
               <?php } ?>
                </li>
                <li>
                     <?php if (isset($_SESSION['citizen_login'])) { ?>
                    <a href="TravelHistory">
                        <i class="fa-solid fa-clipboard-list" style="font-size:24px"></i>
                        Entry Record
                    </a>
                      <?php }  else if (isset($_SESSION['estab_login'])) {  ?>
                           <a href="ScanRecord">
                        <i class="fa-solid fa-clipboard-list" style="font-size:24px"></i>
                        Scan and Record 
                    </a>
                     <?php } ?>
                </li>

              
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://www.cdc.gov/coronavirus/2019-ncov/prevent-getting-sick/prevention.html" class="download">How to Protect Yourself & Others</a>
                </li>
                <li>
                    <a href="https://doh.gov.ph/covid-19/case-tracker" class="article">Covid Updates Philippines</a>
                </li>
            </ul>


        </nav>

        
        

        <!-- Page Content  -->

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                       
                    </button>
                  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    

                    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                        <div class="navbar-header">
                        <a class="navbar-brand">  </a>

                    </div>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                              
                                <a class="nav-link" href="#"><i class="fa-solid fa-user"></i> <?php
                                    if (isset($_SESSION)) {
                                        
                                        if (isset($_SESSION['citizen_login'])) {
                                           echo $_SESSION['citizen_login'];
                                        }
                                        else if (isset($_SESSION['estab_login'])) {
                                           echo $_SESSION['estab_login'];
                                        }

                                    
                                    }

                                 ?> </a>
                            </li>
                          
                             <li class="nav-item active">
                             
                                <a class="nav-link" href="LogOut" 

                                    ><i class="fa-solid fa-right-from-bracket"></i>Log Out</a>
                            </li>
                            

                        </ul>
                        
                    </div>
                </div>
            </nav>
            
         


<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>


<!-- <script type="text/javascript" src="views/js/sidebar.js"></script> -->
