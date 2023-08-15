<div class="TableBackdrop">

<div class="dropdown">

 
            <form class="example" method="POST" action="" style="margin:auto;max-width:300px">
    <input type="text" placeholder="Search.." name="keyword">
    <button name="search"><i class="fa fa-search"></i></button>
  </form>
  
  
</div>


<form action="" method="post">
    <select name="Fac">
        <option value="">Choose Facilities</option>
       
  <?php
                    $facilities = (new FacilitiesController)->ctrShowFacilitiesName();
                    foreach ($facilities as $key => $value) { ?>
      <option><?php echo $value["FacName"];  ?> </option>
      
      <?php } ?>
    </select>
    <input type="submit" name="submit" value="Choose options">
</form>


  <!-- end of search button -->
 

<div id="FacContent">

 <div  class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Pending <b>Names</b></h2>
                    </div>
                    <div id="FacAddBtn" class="col-sm-7">
                       <a href="AddFacility" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Facility</span></a>
                        <a href="AddPerson" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New person</span></a>
                                        
                  </div>
                </div>
            </div>

            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Facility</th>
      <th scope="col">Fullname</th>
      <th scope="col">Status</th>
      <th scope="col">Address</th>
      <th scope="col">Room</th>
       <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
      if (isset($_POST['submit'])) {
       
                    $facilities = (new FacilitiesController)->ctrShowFacilities();
                    foreach ($facilities as $key => $value) {
                      if ($value['Facility'] ==  $_POST['Fac']) {
                       echo '<tr id="Edit">
                              <td>'.$value["Facility"].'</td>
                              <td>'.$value["Fullname"].'</td>
                              <td>'.$value["Status"].'</td>  
                              <td>'.$value["Address"].'</td>   
                              <td>'.$value["Room"].'</td>      
                              <td>
                              
                             
                            <a href="#" id="QuaEdit" class="settings" title="Settings" data-toggle="tooltip" idEdit="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="QuaDelete" class="delete" title="Delete" data-toggle="tooltip" idDelete="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
                              </td>
                            </tr>';
                      }
               
                     
                      }
      }
        else if(isset($_POST['search'])){
                       $keyword = $_POST['keyword'];
                $facilities = (new Connection)->connect()->prepare("SELECT id, Facility, Fullname, Status, Address, Room FROM enterfacilities WHERE `Facility` LIKE '%$keyword%' or `Fullname` LIKE '%$keyword%' or `Status` LIKE '%$keyword%'");
                $facilities->execute();
                         foreach ($facilities as $key => $value) {
                      echo '<tr id="Edit">
                               <td>'.$value["Facility"].'</td>
                              <td>'.$value["Fullname"].'</td>
                              <td>'.$value["Status"].'</td>
                              <td>'.$value["Address"].'</td>  
                              <td>'.$value["Room"].'</td>        
                              <td>
                      
                              <a href="#" id="QuaEdit" class="settings" title="Settings" data-toggle="tooltip" idEdit="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="QuaDelete" class="delete" title="Delete" data-toggle="tooltip" idDelete="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
                              </td>
                            </tr>';
                      }

                      }

      else if (!isset($_POST['submit']) || !isset($_POST['search'])  ) {
        $facilities = (new FacilitiesController)->ctrShowFacilities();
                    foreach ($facilities as $key => $value) {
                  
                       echo '<tr id="Edit">
                              <td>'.$value["Facility"].'</td>
                              <td>'.$value["Fullname"].'</td>
                              <td>'.$value["Status"].'</td>  
                              <td>'.$value["Address"].'</td>   
                              <td>'.$value["Room"].'</td>      
                              <td>
                              
                             
                            <a href="#" id="QuaEdit" class="settings" title="Settings" data-toggle="tooltip" idEdit="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="QuaDelete" class="delete" title="Delete" data-toggle="tooltip" idDelete="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
                              </td>
                            </tr>';
                 
                     
                      }
      }
    
                  ?>
                          
  </tbody>
</table>
</div>
</div>
<?php
$Delete = new FacilitiesController();
                    $Delete -> ctrDeletePerson();
                    ?>


<script type="text/javascript" src="views/js/AddFac.js"></script>

<!-- end of table  -->

