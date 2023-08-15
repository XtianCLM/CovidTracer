<?php

         

$idEditHospital = $_GET['idEditHospital'];

  $Test = (new Connection)->connect()->query("SELECT * FROM hospital WHERE id = $idEditHospital")->fetch(PDO::FETCH_ASSOC);

  $id = $Test['id'];
  $hospitalname = $Test['HospitalName'];
  $location = $Test['Location']; 
  $availroom = $Test['AvailableRoom'];
  $legend = $Test['Legend'];

?>


<section class="AddWrapper">

	
<form role="form" name="Form" id="Form" method="post" autocomplete="nope" >
	<div class="grid-containerAdd">
		<input type="hidden" id="id" name="id" value="<?php echo $id;?>">
		<div class="Add1"><h2>Edit Hospital</h2></div>

			<div class="Add2"><input id="input1" type="text" name="hospitalname" placeholder="Hospital Name..." value="<?php echo $hospitalname;?>" required ></div>
		<div class="Add3">
			<select id="role" name="location" required >
<optgroup label="Location">
	 <option value="<?php echo $location;?>"><?php echo $location;?></option>
	<?php
                    $location = (new HospitalController)->ctrShowLocation();
                    foreach ($location as $key => $value) { ?>
     	<option><?php echo $value["Brgy"];  ?> </option>
      
 			<?php } ?>
</select>   
</div>
		
		<div class="Add4"><input id="input3" type="number" name="availableroom" placeholder="Available Rooms..." value="<?php echo $availroom;?>"  required></div>
		
			<div class="Add5">
		<select id="role" name="legend" required >
<optgroup label="Result">
	<option value="<?php echo $legend;?>"><?php echo $legend;?></option>
  <option value="Normal">Normal</option>
  <option value="Busy">Busy</option>
  <option value="Severe">Severe</option>
  <option value="Crowded">Crowded</option>
</select>
</div>
		
		<button id="EmployeeBtn" type="submit" name="submit" value="submit" class="btn btn-success" >Success</button>
				<?php
							$Update = new HospitalController();
          					$Update -> ctrUpdateHospital();
          					?>



	</div>

	</form>
 <script type="text/javascript" src="views/js/ForAlert.js"></script>

			
</section>