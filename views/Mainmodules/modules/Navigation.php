<?php


?>


    




<section class="AddWrapper">
	<form role="form" name="form" method="POST">
	<div class="grid-containerEditCitizen">

		<div class="Input1"><h2>Tracer</h2></div>
		<div class="Input2"><input type="text" name="code" placeholder="Enter Citizen Code or Fullname" required></div>
		<div class="Input3"><input id="datepickerfrom" name="dates" width="250" type="date" required /></div>
    <div class="Input4"><button type="submit" name="submit" id="CitizenViewBtn" class="btn btn-success" style="width:px;">OK</button></div>


		<div class="Input5">

   		      
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
        if (isset($_POST['submit'])) {
          $history = (new NavigationControllers)->ctrShowCitHist();
                    foreach ($history as $key => $value) {
                      echo '<tr>
                              <td>'.$value["EstabName"].'</td>
                              <td>'.$value["CitCode"].'</td>  
                              <td>'.$value["Fullname"].'</td>   
                              <td>'.$value["Dates"].'</td>     
                      
                            </tr>';
                      }
        }

        elseif (!isset($_POST['submit'])) {
         $history = (new NavigationControllers)->ctrShowTravelHistory();
                    foreach ($history as $key => $value) {
                      echo '<tr>
                              <td>'.$value["EstabName"].'</td>
                              <td>'.$value["CitCode"].'</td>  
                              <td>'.$value["Fullname"].'</td>   
                              <td>'.$value["Dates"].'</td>     
                              
                            </tr>';
                      }
        }
                   
                  ?>
  </tbody>
</table>

		</div>
		


   
	</div>
  </form>


</section>