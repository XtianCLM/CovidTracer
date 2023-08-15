<?php
         

$idEdit = $_GET['idEdit'];

  $employee = (new Connection)->connect()->query("SELECT * FROM enterfacilities WHERE id = $idEdit")->fetch(PDO::FETCH_ASSOC);

  $id = $employee['id'];
  $fullname = $employee['Fullname'];
  $status = $employee['Status']; 
  $facility = $employee['Facility'];
  $address = $employee['Address'];
  $room = $employee['Room'];




?>
<section class="AddWrapper">

	
<form role="form" name="Form" id="Form" method="post" autocomplete="nope">
	<div class="grid-containerAdd">
		 <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
		<div class="Add1"><h2>Edit Person</h2></div>

			<div class="Add2"><input id="input1" type="text" name="Fullname" placeholder="Fullname..." value="<?php echo $fullname;?>" required ></div>
				<div class="Add3">
					<select id="role" name="Status" required >
<optgroup label="Status">
<option value="<?php echo $status;?>">--<?php echo $status;?>--</option>
  <option value="Pending">Pending</option>
  <option value="Positive">Positive</option>
  <option value="Negative">Negative</option>
</select>

</div>

<div class="Add4">
<select id="role" name="Facility" required >
<optgroup label="Facility">
	 <option value="<?php echo $facility;?>">--<?php echo $facility;?>--</option>
	<?php
                    $location = (new FacilitiesController)->ctrShowFacilitiesName();
                    foreach ($location as $key => $value) { ?>
     	<option><?php echo $value["FacName"];  ?> </option>
      
 			<?php } ?>
</select>    
</div>

		<div class="Add5">
<select id="role" name="Address" required >
<optgroup label="Address">
	 <option value="<?php echo $address;?>">--<?php echo $address;?>--</option>
	<?php
                    $location = (new FacilitiesController)->ctrShowLocation();
                    foreach ($location as $key => $value) { ?>
     	<option><?php echo $value["Brgy"];  ?> </option>
      
 			<?php } ?>
</select>  
</div>
<div class="Add6"><input id="input2" type="number" name="Room" placeholder="Room number..." value="<?php echo $room;?>" required ></div>

		
	<button id="EmployeeBtn" type="submit" name="submit" value="submit" class="btn btn-success" >Success</button>
	<!-- 	<button type="button" id="FacCancelBtn" class="btn btn-danger">Cancel</button> -->
	

	<?php
          $Update = new FacilitiesController();
          $Update -> ctrUpdatePerson();
        ?>
 
	</div>

	</form>
	
			
</section>