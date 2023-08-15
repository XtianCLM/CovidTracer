<section class="AddWrapper">

	
<form role="form" name="Form" id="Form" method="post" autocomplete="nope" >
	<div class="grid-containerAdd">
		<div class="Add1"><h2>Add Hospital</h2></div>

			<div class="Add2"><input id="input1" type="text" name="hospitalname" placeholder="Hospital Name..." required ></div>
		<div class="Add3">
			<select id="role" name="location" required >
<optgroup label="Location">
	 <option value="">--Select Location--</option>
	<?php
                    $location = (new HospitalController)->ctrShowLocation();
                    foreach ($location as $key => $value) { ?>
     	<option><?php echo $value["Brgy"];  ?> </option>
      
 			<?php } ?>
</select>   
</div>
		
		<div class="Add4"><input id="input3" type="number" name="availableroom" placeholder="Available Rooms..." required></div>
		
			<div class="Add5">
		<select id="role" name="legend" required >
<optgroup label="Result">
	<option value="">--Select Status--</option>
  <option value="Normal">Normal</option>
  <option value="Busy">Busy</option>
  <option value="Severe">Severe</option>
  <option value="Crowded">Crowded</option>
</select>
</div>
		
		<button id="EmployeeBtn" type="submit" name="submit" value="submit" class="btn btn-success" >Success</button>
				<?php
							$Update = new HospitalController();
          					$Update -> addHospitalCtr();
          					?>



	</div>

	</form>
 <script type="text/javascript" src="views/js/ForAlert.js"></script>

			
</section>