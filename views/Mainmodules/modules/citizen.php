<div class="TableBackdrop">


                <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Users Listing
  </button>



   <div id="listing" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="employee">employee</a>
    <a class="dropdown-item" href="establishment">Establishments</a>
  </div>
</div>

 <div id="AddContent">              
                                    <div class="TableFlex">

                                        <div class="Table1">
                                       

<div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>New <b>Registers</b></h2>
                    </div>
                </div>
            </div>

         
      <table class="table table-striped">
  <thead>
    <tr>
     <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
     
      <th scope="col">Code</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
      
                       $rtpcr = (new CitizenController)->ctrShowCitizenVer();
                    foreach ($rtpcr as $key => $value) {
              
                      echo '<tr id="Edit">
                                
                              <td>'.$value["Fullname"].'</td>
                              <td>'.$value["Email"].'</td>  
                              <td>'.$value["Address"].'</td>  
                               <td>'.$value["Code"].'</td>    
                              <td>
                            <a href="#" id="CitVerEdit" class="settings" title="Settings" data-toggle="tooltip" EditidCitVer="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="CitVerDel" class="delete" title="Delete" data-toggle="tooltip" DelidCitVer="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
                              </td>
                            </tr>';
                      }
                  ?>
                          
  </tbody>
</table>

         
</div>




    <div class="Table2">
<div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Verified <b>Citizen</b></h2>
                    </div>
                  
                </div>
            </div>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col">role</th>
      <th scope="col">Code</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php

                    $rtpcr = (new CitizenController)->ctrShowCitizen();
                    foreach ($rtpcr as $key => $value) {
              
                      echo '<tr id="Edit">
                                
                              <td>'.$value["Fullname"].'</td>
                              <td>'.$value["Email"].'</td>  
                              <td>'.$value["Address"].'</td>  
                               <td>'.$value["Status"].'</td>  
                               <td>'.$value["roles"].'</td>  
                               <td>'.$value["Code"].'</td>    
                              <td>

                            <a href="#" id="CitVerView" class="viewlist" title="Viewlist" data-toggle="tooltip" HisidCit="'.$value["id"].'" ><i class="material-icons">&#xe8ef;</i></a>
                            <a href="#" id="CitVerEdit" class="settings" title="Settings" data-toggle="tooltip" EditidCitVer="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="CitVerDel" class="delete" title="Delete" data-toggle="tooltip" DelidCitVer="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
                            
                              </td>
                            </tr>';
                      }
                  ?>
  </tbody>
</table>

</div>


</div>
</div>

</div>
<?php
              $Delete = new CitizenController();
                    $Delete -> ctrDeleteAccCit();
                    ?>







