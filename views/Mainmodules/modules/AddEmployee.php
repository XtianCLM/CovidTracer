<section class="AddWrapper">


<form role="form" name="Form" id="Form" method="post" autocomplete="nope">
  <div class="grid-containerAdd">
    
    <div class="Add1"><h2>Add Employee</h2></div>
    <div class="Add2"><input id="input1" type="text" name="Fullname" placeholder="Fullname..."  required></div>
    <div class="Add3"><input id="input2" type="text" name="Email" placeholder="Email..." required ></div>
    <div class="Add4"><input id="input3" type="text" name="Phone" placeholder="Phone..."  required></div>
    <div class="Add5"><select id="role" name="Gender" required >
<optgroup label="Gender">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>   </div>
    <div class="Add6"><select id="role" name="Address" required >
<optgroup label="Address">
   <option>--Select Location--</option>
  <?php
                    $location = (new EmployeeController)->ctrShowLocation();
                    foreach ($location as $key => $value) { ?>
      <option><?php echo $value["Brgy"];  ?> </option>
      
      <?php } ?>
</select>   
</div>
    <div class="Add7"><input id="input5" type="text" name="Username" placeholder="Username..." required ></div>
    <div class="Add8"><input id="input6" type="password" name="Password" placeholder="Password..." required ></div>
    <div class="Add9">
<select id="role" name="roles" required >
<optgroup label="Role">
  <option value="admin">Admin</option>
  <option value="employee">Employee</option>
</select> 
    </div>
    <div class="Add10"><input id="input7" type="test" name="Status" placeholder="Status..." required ></div>     
    <button id="EmployeeBtn" type="submit" name="submit" value="submit" class="btn btn-success" >Success</button>
  
       <?php
          $createEmployee = new EmployeeController();
          $createEmployee -> addEmployeeCtr();
        ?>



  </div>

  </form>
 <script type="text/javascript" src="views/js/ForAlert.js"></script>

      
</section>