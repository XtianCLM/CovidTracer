<?php
 // require "../../controllers/Rtpcrctrl.php";
?>
<section class="AddWrapper">

	
<form role="form" name="Form" id="Form" method="post" autocomplete="nope" target="votar">
	<div class="grid-containerAdd">
		
		<div class="Add1"><h2>Add Test</h2></div>
			<div class="Add2"><input id="input1" type="text" name="FacCode" placeholder="Facility Code..." required ></div>
		<div class="Add3">
			<select id="role" name="FacLocation" required >
<optgroup label="Location">
	 <option disabled selected>--Select Location--</option>
	<?php
                    $location = (new FacilitiesController)->ctrShowLocation();
                    foreach ($location as $key => $value) { ?>
     	<option><?php echo $value["Brgy"];  ?> </option>
      
 			<?php } ?>
</select>   
</div>
		
		<div class="Add4"><input id="input3" type="text" name="FacName" placeholder="Facility Name..."  required></div>
		
		<div class="Add5"><input id="input4" name="FacRooms" type="number" placeholder="Enter number of Rooms" required ></div>
		
		<button id="EmployeeBtn" type="submit" name="submit" value="submit" class="btn btn-success" >Success</button>
	<!-- 	<button type="button" id="FacCancelBtn" class="btn btn-danger">Cancel</button> -->
			 <?php
          $createTest = new FacilitiesController();
          $createTest -> addFacilitiesCtr();
        ?>



	</div>

	</form>
 <script type="text/javascript" src="views/js/ForAlert.js"></script>

			
</section>