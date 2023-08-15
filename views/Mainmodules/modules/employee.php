<div class="TableBackdrop">


                <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Users Listing
  </button>



   <div id="listing" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="citizen">Citizens</a>
    <a class="dropdown-item" href="establishment">Establishments</a>
  </div>
</div>

<div id="AddContent">

<div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Employees</b></h2>
                    </div>
                    <div id="myAddBtn" class="col-sm-7">
                        <a href="AddEmployee"  class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New User</span></a>
                       					
                    </div>
                </div>
            </div>


            
     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Username</th>
      <th scope="col">roles</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

     <?php
     
                    $employee = (new EmployeeController)->ctrShowEmployee();
                    foreach ($employee as $key => $value) {
                      echo '<tr>
                              <td>'.$value["Fullname"].'</td>
                              <td>'.$value["Email"].'</td>
                              <td>'.$value["Address"].'</td>  
                              <td>'.$value["Username"].'</td> 
                              <td>'.$value["roles"].'</td>      
                              <td>
                                <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
                              </td>
                            </tr>';
                      }
                  ?>
  </tbody>
</table>
</div>
</div>

<!-- <script type="text/javascript" src="views/js/AddJS.js"></script> -->