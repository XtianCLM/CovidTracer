

<body>

    <div class="wrapper" >
        <!-- Sidebar  -->
        <nav id="sidebar" >
            <div class="sidebar-header">
                <h3>DeCovidTracer</h3>
                <strong><i class="fa-solid fa-laptop-medical"></i></strong>
            </div>

            <ul class="list-unstyled components">
                <li>
                    <a href="https://doh.gov.ph/covid-19/case-tracker">
                        
                        <i class='far fa-newspaper' style='font-size:20px'></i>
                        Covid Updates
                    </a>
                   
                </li>
              <li>
                        
                    <a  href="Userprofile" >
                        <i class='fas fa-address-book' style='font-size:24px'></i>
                        Userslist
                    </a>
    
                </li>
       
            <li>
                        
                    <a  href="Hospital" >
                        <i class='far fa-hospital' style='font-size:24px'></i>
                        Hospitals
                    </a>
    
                </li>
                 

                <li>
                    <a href="Navigation">
                        <i class="fa-solid fa-location-dot" style='font-size:24px'></i>
                        Navigation
                    </a>
                </li>
                <li>
                    <a href="quarantine">
                        <i class="fa-solid fa-house-medical" style='font-size:24px'></i>
                        Quarantine Facility
                    </a>
                </li>
                <li >
                    <a href="RTPCR">
                        <i class="fa-solid fa-vial" style="font-size:24px"></i>
                        RT-PCR
                    </a>
                
                </li>

                 <li>
                    <a href="CovidAreas">                        
                        <i class="fa-solid fa-magnifying-glass-location" style="font-size:24px"></i>
                        Covid Areas
                    </a>
                </li>

               
            </ul>

            <!-- <ul class="list-unstyled CTAs">
                <li>
                    <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
                </li>
                <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li>
            </ul> -->
        </nav>


        <!-- Page Content  -->
        <div id="content" >

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
                                     if (isset($_SESSION['admin_login'])) {
                                           echo $_SESSION['admin_login'];
                                        }
                                        else if (isset($_SESSION['employee_login'])) {
                                           echo $_SESSION['employee_login'];
                                        }

                                 ?> </a>
                            </li>
                             <li class="nav-item active">
                              
                                <a class="nav-link" href="LogOut"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a>
                            </li>
                            

                        </ul>
                    </div>
                </div>
            </nav>





<!--   <div id="content"></div> -->
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<!--   <script src="views/JS/JqueryScript.js"></script> -->