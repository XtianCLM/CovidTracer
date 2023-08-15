<?php
 // require "../../controllers/Rtpcrctrl.php";
?>
<section class="AddWrapper">

	
<form role="form" name="Form" id="Form" method="post" autocomplete="nope" target="votar">
	<div class="grid-containerAdd">
		
		<div class="Add1"><h2>Add Person</h2></div>
			<div class="Add2"><input id="input1" type="text" name="Fullname" placeholder="Fullname..." required ></div>
				<div class="Add3">
		<select id="role" name="Status" required >
<option disabled selected>--Select Status--</option>
  <option value="Pending">Pending</option>
  <option value="Positive">Positive</option>
  <option value="Negative">Negative</option>
</select>
</div>
<div class="Add4">
	<select id="role" name="Facility" required >
<optgroup label="Facilities">
	 <option disabled selected>--Select Facility--</option>
	<?php
                    $location = (new FacilitiesController)->ctrShowFacilitiesName();
                    foreach ($location as $key => $value) { ?>
     	<option><?php echo $value["FacName"];  ?> </option>
      
 			<?php } ?>
</select>   
</div>
		<div class="Add5">
			<select id="role" name="Address" required >
<optgroup label="Location">
	 <option disabled selected>--Select Location--</option>
	<?php
                    $location = (new RtpcrController)->ctrShowLocation();
                    foreach ($location as $key => $value) { ?>
     	<option><?php echo $value["Brgy"];  ?> </option>
      
 			<?php } ?>
</select>   

</div>
<div class="Add6"><input id="input2" type="number" name="Room" placeholder="Room number..." required ></div>

		
		<button id="EmployeeBtn" type="submit" name="submit" value="submit" class="btn btn-success" >Success</button>
	<!-- 	<button type="button" id="FacCancelBtn" class="btn btn-danger">Cancel</button> -->
			 <?php
          $createTest = new FacilitiesController();
          $createTest -> addPersonCtr();
        ?>



	</div>

	</form>

			
</section>