<?php
         

    
    $HisidCit = $_GET['HisidCit'];

 $citizen = (new Connection)->connect()->query("SELECT * FROM masterlogin WHERE id = $HisidCit")->fetch(PDO::FETCH_ASSOC);


  $fullname = $citizen['Fullname'];
    $Email = $citizen['Email'];
  $status = $citizen['Status']; 
  $address = $citizen['Address'];
    $code = trim($citizen['Code']);





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
                      <strong><p class="text-secondary mb-1"><?php echo $Email ; ?></p></strong>
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
                          <div class="">
                      <h6 class="mb-0">Travel History</h6>
                    </div>
                  </div>    
                  <hr>
                  <div class="row">
                   <div id="AddContent">


     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" style="color: dimgray; font-size: 1.1em;">Establishment</th>
      <th scope="col" style="color: dimgray; font-size: 1.1em;">Code</th>
      <th scope="col" style="color: dimgray; font-size: 1.1em;">Fullname</th>
      <th scope="col" style="color: dimgray; font-size: 1.1em;">Dates</th>
  
    </tr>
  </thead>
  <tbody>

     <?php
                    
                    $history = (new CitizenController)->ctrShowCitHistory();
                    foreach ($history as $key => $value) {
                       if(isset($_SESSION)){
                      if ($value['CitCode'] == $code ) {
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

        </div>
    </div>