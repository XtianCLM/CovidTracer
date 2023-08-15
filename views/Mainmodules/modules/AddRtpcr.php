<?php
 // require "../../controllers/Rtpcrctrl.php";
?>
<section class="AddWrapper">

	
<form role="form" name="Form" id="Form" method="post" autocomplete="nope" target="votar">
	<div class="grid-containerAdd">
		
		<div class="Add1"><h2>Add Test</h2></div>
			<div class="Add2"><input id="input1" type="text" name="Fullname" placeholder="Fullname..." required ></div>
		<div class="Add3">
			<select id="role" name="Address" required >
<optgroup label="Location">
	 <option>--Select Location--</option>
	<?php
                    $location = (new RtpcrController)->ctrShowLocation();
                    foreach ($location as $key => $value) { ?>
     	<option><?php echo $value["Brgy"];  ?> </option>
      
 			<?php } ?>
</select>   
</div>
		
		<div class="Add4"><input id="input3" type="text" name="TestCode" placeholder="Code..."  required></div>
			<div class="Add5">
		<select id="role" name="Result" required >
<optgroup label="Result">
  <option value="Pending">Pending</option>
  <option value="Positive">Positive</option>
  <option value="Negative">Negative</option>
</select>
</div>
		<div class="Add6"><input id="input5" name="datepicker" type="date" required ></div>
		
		<button id="EmployeeBtn" type="submit" name="submit" value="submit" class="btn btn-success" >Success</button>
	<!-- 	<button type="button" id="FacCancelBtn" class="btn btn-danger">Cancel</button> -->
			 <?php
          $createTest = new RtpcrController();
          $createTest -> addRtpcrCtr();
        ?>



	</div>

	</form>
 <script type="text/javascript" src="views/js/ForAlert.js"></script>

			
</section>