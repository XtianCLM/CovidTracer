
<div class="TableBackdrop">
           <form class="example" method="POST" action="" style="margin:auto;max-width:300px">
    <input type="text" placeholder="Search.." name="keyword">
    <button name="search"><i class="fa fa-search"></i></button>
  </form>
                

        
            <div class="container-fluid" id="ToCenter">
                    <div class="RTPCRResult">

            <form><div style="background-color:#68e49c;"><i class='fas fa-user-plus' style='font-size:36px; margin-left: 65px;'></i>
                    <label>Positive
                      <a href="">
                      <?php
                    $count = new RtpcrController();

                   echo $count->ctrShowPostive();
                   
                        
      
            ?>
                      </a>

                    </label>
            </div></form>
            <form><div style="background-color:#e28e85;"><i class='fas fa-user-minus' style='font-size:36px; margin-left: 65px;'></i>
                    <label>Negative
                      <a href="">
                         <?php
                    $count = new RtpcrController();

                   echo $count->ctrShowNegative();
                   
                        
      
            ?>
                      </a>

                    </label>
            </div></form>
            <form><div style="background-color:#e89558;"><i class='fas fa-user-clock' style='font-size:36px; margin-left: 65px;'></i>
                    <label>Pending
                         <a href="">
                             <?php
                    $count = new RtpcrController();

                   echo $count->ctrShowPending();
                   
                        
      
            ?>
                      </a>

                    </label>
            </div></form>
                       
                    </div>
                    </div>

         <!--    <div class="line"></div> -->

            <!-- Add Edit Modal -->
                    

    <div id="AddContent">              
                                    <div class="TableFlex">

                                        <div class="Table1">
                                       

<div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Pending <b>Test</b></h2>
                    </div>
                    <div id="myAddBtn" class="col-sm-7">
                        <a href="AddRtpcr"  class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Test</span></a>
                                        
                  </div>
                </div>
            </div>

         
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Result</th>
      <th scope="col">Name</th>
      <th scope="col">Adrress</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <?php
      if(!isset($_POST['search'])){
                    $rtpcr = (new RtpcrController)->ctrShowRtpcr();
                    foreach ($rtpcr as $key => $value) {
              
                      echo '<tr id="Edit">
                              <td>'.$value["TestResult"].'</td>
                              <td>'.$value["Fullname"].'</td>  
                              <td>'.$value["Address"].'</td>  
                               <td>'.$value["Dates"].'</td>      
                              <td>
                            <a href="#" id="TestEdit" class="settings" title="Settings" data-toggle="tooltip" EditidTest="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="TestDel" class="delete" title="Delete" data-toggle="tooltip" idTest="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
                              </td>
                            </tr>';
                      }

                  }

                      else if(isset($_POST['search'])){
                       $keyword = $_POST['keyword'];
                $rtpcr = (new Connection)->connect()->prepare("SELECT id, TestResult, Fullname, Address, Dates FROM rtpcr WHERE `TestResult` LIKE '%$keyword%' AND TestResult = 'Pending' OR `Fullname` LIKE '%$keyword%' AND TestResult = 'Pending' OR `Address` LIKE '%$keyword%' AND TestResult = 'Pending'");
                $rtpcr->execute();
                         foreach ($rtpcr as $key => $value) {
                      echo '<tr id="Edit">
                               <td>'.$value["TestResult"].'</td>
                              <td>'.$value["Fullname"].'</td>
                              <td>'.$value["Address"].'</td>
                              <td>'.$value["Dates"].'</td>        
                              <td>
                      
                             <a href="#" id="TestEdit" class="settings" title="Settings" data-toggle="tooltip" EditidTest="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="TestDel" class="delete" title="Delete" data-toggle="tooltip" idTest="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
                              </td>
                            </tr>';
                      }

                      }
                  ?>
                          
  </tbody>
</table>

         
</div>




    <div class="Table2">
<div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Test <b>Results</b></h2>
                    </div>
                  
                </div>
            </div>
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Result</th>
      <th scope="col">Fullname</th>
      <th scope="col">Address</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
    if(!isset($_POST['search'])){
                    $rtpcr = (new RtpcrController)->ctrShowRtpcrPN();
                    foreach ($rtpcr as $key => $value) {
              
                      echo '<tr id="Edit">
                              <td>'.$value["TestResult"].'</td>
                              <td>'.$value["Fullname"].'</td>  
                              <td>'.$value["Address"].'</td>  
                               <td>'.$value["Dates"].'</td>      
                              <td>
                            <a href="#" id="TestEdit" class="settings" title="Settings" data-toggle="tooltip" EditidTest="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="TestDel" class="delete" title="Delete" data-toggle="tooltip" idTest="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
                              </td>
                            </tr>';
                      }
                  }
                      else if(isset($_POST['search'])){
                       $keyword = $_POST['keyword'];
                $rtpcr = (new Connection)->connect()->prepare("SELECT id, TestResult, Fullname, Address, Dates FROM rtpcr WHERE `TestResult` LIKE '%$keyword%' AND TestResult ='Positive' OR `TestResult` LIKE '%$keyword%' AND TestResult ='Negative'
                 OR `Fullname` LIKE '%$keyword%' AND TestResult ='Positive' OR
                 `Fullname` LIKE '%$keyword%' AND TestResult ='Negative'
                  OR `Address` LIKE '%$keyword%' AND TestResult ='Positive' OR
                 `Address` LIKE '%$keyword%' AND TestResult ='Negative' ");
                $rtpcr->execute();
                         foreach ($rtpcr as $key => $value) {
                      echo '<tr id="Edit">
                               <td>'.$value["TestResult"].'</td>
                              <td>'.$value["Fullname"].'</td>
                              <td>'.$value["Address"].'</td>
                              <td>'.$value["Dates"].'</td>        
                              <td>
                      
                             <a href="#" id="TestEdit" class="settings" title="Settings" data-toggle="tooltip" EditidTest="'.$value["id"].'"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="#" id="TestDel" class="delete" title="Delete" data-toggle="tooltip" idTest="'.$value["id"].'"><i class="material-icons">&#xE5C9;</i></a>
                              </td>
                            </tr>';
                      }

                      }

                  ?>
  </tbody>
</table>

</div>


</div>

</div>

<?php
              $Delete = new RtpcrController();
                    $Delete -> ctrDeleteTest();
                    ?>

<script type="text/javascript" src="views/js/AddJS.js"></script>

