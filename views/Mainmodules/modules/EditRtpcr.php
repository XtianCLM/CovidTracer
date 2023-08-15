<?php

         

$EditidTest = $_GET['EditidTest'];

  $Test = (new Connection)->connect()->query("SELECT * FROM rtpcr WHERE id = $EditidTest")->fetch(PDO::FETCH_ASSOC);

  $id = $Test['id'];
  $testcode = $Test['TestCode'];
  $testresult = $Test['TestResult']; 
  $fullname = $Test['Fullname'];
  $address = $Test['Address'];
  $dates = $Test['Dates'];
  




?>


<section class="AddWrapper">

	
<form role="form" name="Form" id="Form" method="post" autocomplete="nope">
	<div class="grid-containerAdd">
		<input type="hidden" id="id" name="id" value="<?php echo $id;?>">
		<div class="Add1"><h2>Edit Test</h2></div>

			<div class="Add2"><input id="input1" type="text" name="Fullname" placeholder="Fullname..." value="<?php echo $fullname;?>" required ></div>
		<div class="Add3">
			<select id="role" name="Address" required >
<optgroup label="Location">
	 <option value="<?php echo $address;?>"><?php echo $address;?></option>
	<?php
                    $location = (new RtpcrController)->ctrShowLocation();
                    foreach ($location as $key => $value) { ?>
     	<option><?php echo $value["Brgy"];  ?> </option>
      
 			<?php } ?>
</select>   
</div>
		
		<div class="Add4"><input id="input3" type="text" name="TestCode" placeholder="Code..." value="<?php echo $testcode;?>"  required></div>
			<div class="Add5">
		<select id="role" name="TestResult" required >
<optgroup label="Result">
	<option value="<?php echo $testresult;?>"><?php echo $testresult;?></option>
  <option value="Pending">Pending</option>
  <option value="Positive">Positive</option>
  <option value="Negative">Negative</option>
</select>
</div>
		<div class="Add6"><input id="input5" name="Dates" type="date" required value="<?php echo $dates;?>" ></div>
		
		<button id="EmployeeBtn" type="submit" name="submit" value="submit" class="btn btn-success" >Success</button>
				<?php
							$Update = new RtpcrController();
          					$Update -> ctrUpdateTest();
          					?>



	</div>

	</form>
 <script type="text/javascript" src="views/js/ForAlert.js"></script>

			
</section>