<?php
         
if (isset($_SESSION)) {
    
    $Email = $_SESSION['estab_login'];

             $stmt =(new Connection)->connect()->prepare("SELECT Fullname, EstabName, Username, Password, Phone, Address, Gender, roles, Status, Code FROM masterlogin WHERE Email = :Email ");

            $stmt->bindParam(":Email", $Email);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $dbfullname = $row["Fullname"];
                 $dbestabname = trim($row["EstabName"]);
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
                     $estabname = $dbestabname;
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

 // else if(isset($_POST['submit'])){

 //      $code = $_POST['code'];

 //       $stmt =(new Connection)->connect()->prepare("SELECT Fullname, Email, Address FROM masterlogin WHERE Code = :Code ");

 //            $stmt->bindParam(":Code", $code);
 //            $stmt->execute();

 //            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

 //                $dbcitfullname = $row["Fullname"];
 //                 $dbcitemail = $row["Email"];
 //                $dcitaddress = $row["Address"];
               
               
 //            }

 //            if ($stmt->rowCount()>0) {

 //                    $citfullname = $dbcitfullname;
 //                     $citemail = $dbcitemail;
 //                    $citaddress = $dcitaddress;
                   
                  
 //                    }
 //                     echo $citemail;

 //    }

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
                      <strong><p class="text-secondary mb-1"><?php echo $estabname ; ?></p></strong>
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
                 
                  <form role='form' name="form" method="POST" action="">
                  <div class="row">
                          <div class="">
                      <h6 class="mb-0">Enter Citizen Code</h6>
                    </div>
                    <div class="col-sm-4 text-secondary">
                       <input type="hidden" class="form-control" name="estabname" value="<?php echo $estabname; ?>" required >
                      <input type="text" class="form-control" name="code" value="" required >
                      <h6 class="mb-0">Enter Fullname</h6>
                      <input type="text" class="form-control" name="fullname" value="" required >
                      <input id="datepickerfrom" name="dates" type="date" required />
                      
                    </div>
                     <div class="col-sm-5">
                       <input class="btn btn-info" type="submit" name="submit" value="Insert">
                    </div>
                  </div>
               </form>
                 
                  <hr>





                  <div class="row">
                   <div id="AddContent">


     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Establishment</th>
      <th scope="col">Citizen Code</th>
      <th scope="col">Fullname</th>
      <th scope="col">Dates</th>
  
    </tr>
  </thead>
  <tbody>

     <?php
     
                    $history = (new EstablishmentCotrollers)->ctrShowEstabHistory();
                    foreach ($history as $key => $value) {
                       if(isset($_SESSION)){
                      if ($value['EstabName'] ==  $estabname) {
                      echo '<tr>
                              <td>'.$value["EstabName"].'</td>
                              <td>'.$value["CitCode"].'</td>
                              <td>'.$value["Fullname"].'</td>  
                              <td>'.$value["Dates"].'</td>      
                          
                            </tr>';
                          }
                        }
                      }
                  ?>
  </tbody>
</table>
</div>

                  </div>
                </div>
              </div>

            



            </div>
          </div>
             <?php 
            $Add = new EstablishmentCotrollers();
            $Add->addCitizenCtr();

        ?>
        </div>
    </div>