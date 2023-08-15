 <?php
         
if (isset($_SESSION)) {
    
    $Email = $_SESSION['citizen_login'];

             $stmt =(new Connection)->connect()->prepare("SELECT Fullname, Username, Password, Phone, Address, Gender, roles, Status, Code FROM masterlogin WHERE Email = :Email ");

            $stmt->bindParam(":Email", $Email);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $dbfullname = $row["Fullname"];
                $dbusername = $row["Username"];
                $dbpassword = $row["Password"];
                $dbphone = $row["Phone"];
                $dbaddress = $row["Address"];
                $dbgender = $row["Gender"];
                $dbroles = $row["roles"];
                $dbstatus = $row["Status"];
                $dbcode = $row["Code"];
               
            }

            if ($stmt->rowCount()>0) {

                    $fullname = $dbfullname;
                    $username = $dbusername;
                    $password = $dbpassword;
                    $phone = $dbphone;
                    $address = $dbaddress;
                     $gender = $dbgender;
                      $roles = $dbroles;
                      $status = $dbstatus;
                      $code = $dbcode;

                    }



}

?>


 <div class="container">
    <div class="main-body">

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $fullname ; ?></h4>
                      <p class="text-secondary mb-1"><?php echo $roles ; ?></p>
                      <p class="text-muted font-size-sm"><?php echo $address ; ?></p>
                      <button class="btn btn-primary">Message</button>
                      <button class="btn btn-outline-primary" onclick=" Swal.fire('<?php echo $status; ?>')" >Status</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fullname ; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $_SESSION['citizen_login'] ; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $phone ; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $gender ; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $address ; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info "  href="EditCitizenProfile">Edit</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Please See</i>you code</h6>
                      <small>Your Code</small>
                      <div class="progress mb-3" style="height: 50px">
                        <div class="progress-bar bg-primary" style="width: 100%" > <h3><?php echo $code ?></h3></div>
                      </div>
                     
                    </div>
                  </div>
                </div>
               
              </div>



            </div>
          </div>

        </div>
    </div>