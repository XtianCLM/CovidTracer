        
                <!-- Search Bar -->


<div class="TableBackdrop">

                                <form class="example" method="POST" action="" style="margin:auto;max-width:300px">
    <input type="text" placeholder="Search.." name="keyword">
    <button name="search"><i class="fa fa-search"></i></button>
  </form>
                
                <!-- Search Bar -->
               
                
                   
               
                    

                <!-- Legend -->
                <div class="container-fluid" id="ToCenter">
                    <div class="Legend">
                       
                            <div>
                                <i class='fas fa-circle' style='font-size:36px; color:green'></i>
                                <label>Normal</label>
                            </div>
                            <div><i class='fas fa-circle' style='font-size:36px; color:yellow'></i>
                             <label>Busy</label></div>
                            <div><i class='fas fa-circle' style='font-size:36px; color:orange'></i>
                             <label>Severe</label></div>
                            <div><i class='fas fa-circle' style='font-size:36px; color:red'></i>
                             <label>Crowded</label></div>
                       
                    </div>
                    </div>

  <div id="AddContent"> 

<div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Hospital <b>Management</b></h2>
                    </div>
                    <div id="myAddBtn" class="col-sm-7">
                        <a href="AddHospital"  class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Hospital</span></a>
                                        
                    </div>
                </div>
            </div>

          
<table class="table table-striped">
  <thead>
    <tr>
        <th scope="col">id#</th>
      <th scope="col">Hospital Name</th>
      <th scope="col">Location</th>
      <th scope="col">Available Room</th>
      <th scope="col">Legend</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
     <?php
      if(!isset($_POST['search'])){
                    $hospital = (new HospitalController)->ctrShowHospital();
                    foreach ($hospital as $key => $value) {
                      echo '<tr id="Edit">
                               <td>'.$value["id"].'</td>
                              <td>'.$value["HospitalName"].'</td>
                              <td>'.$value["Location"].'</td>
                              <td>'.$value["AvailableRoom"].'</td>  
                              <td>'.$value["Legend"].'</td>        
                              <td>
                      
                            <a href="#" id="EditHospitalrec" class="settings" title="Settings" data-toggle="tooltip" idEditHospital="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="DelHospital" class="delete" title="Delete" data-toggle="tooltip" idDelHospital="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
                              </td>
                            </tr>';
                      }
                        }
                     else if(isset($_POST['search'])){
                       $keyword = $_POST['keyword'];
                $hospital = (new Connection)->connect()->prepare("SELECT id, HospitalName, Location, AvailableRoom, Legend FROM hospital WHERE `HospitalName` LIKE '%$keyword%' or `Location` LIKE '%$keyword%' or `Legend` LIKE '%$keyword%'");
                $hospital->execute();
                         foreach ($hospital as $key => $value) {
                      echo '<tr id="Edit">
                               <td>'.$value["id"].'</td>
                              <td>'.$value["HospitalName"].'</td>
                              <td>'.$value["Location"].'</td>
                              <td>'.$value["AvailableRoom"].'</td>  
                              <td>'.$value["Legend"].'</td>        
                              <td>
                      
                            <a href="#" id="EditHospitalrec" class="settings" title="Settings" data-toggle="tooltip" idEditHospital="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="DelHospital" class="delete" title="Delete" data-toggle="tooltip" idDelHospital="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
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
            $Delete = new HospitalController();
            $Delete->ctrDeleteHospital();

        ?>
<!-- Table -->
<script type="text/javascript" src="views/js/AddJS.js"></script>