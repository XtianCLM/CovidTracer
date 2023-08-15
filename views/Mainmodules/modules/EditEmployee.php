<?php
         

$idEmployee = $_GET['idEmployee'];

  $employee = (new Connection)->connect()->query("SELECT * FROM masterlogin WHERE id = $idEmployee")->fetch(PDO::FETCH_ASSOC);

  $id = $employee['id'];
  $fullname = $employee['Fullname'];
  $email = $employee['Email']; 
  $phone = $employee['Phone'];
  $gender = $employee['Gender'];
  $address = $employee['Address'];
  $username = $employee['Username'];
  $password = $employee['Password'];
  $role = $employee['roles'];
  $status = $employee['Status'];




?>


<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
								<div class="mt-3">
									<h4> <?php echo $fullname ; ?></h4>
									<p class="text-secondary mb-1"> <?php echo $role ; ?></p>
									<p class="text-muted font-size-sm"> <?php echo $address ; ?></p>
									<button class="btn btn-primary">Message</button>
									<button class="btn btn-outline-primary"  onclick=" Swal.fire('<?php echo $status; ?>')" >Status</button>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<form role="form" method="POST" >
					<div class="card" >
						<div class="card-body" >

							 <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
							 
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="fname" value=" <?php echo $fullname ; ?>" required>
								</div>
							</div>
							
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="phone" value=" <?php echo $phone ; ?>" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Gender</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<select class="form-control" name="gender" required>
                <option value="" selected="select"><?php echo $gender ; ?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>

            </select>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Address</h6>
								</div>
								<div class="col-sm-9 text-secondary">
							<select id="role" name="address" required >
<optgroup label="Address">
	 <option value="<?php echo $address;?>">--<?php echo $address;?>--</option>
	<?php
                    $location = (new FacilitiesController)->ctrShowLocation();
                    foreach ($location as $key => $value) { ?>
     	<option><?php echo $value["Brgy"];  ?> </option>
      
 			<?php } ?>
</select>  
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Username</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="username" value=" <?php echo $username ; ?>" required>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Status</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="status" value=" <?php echo $status ; ?>" required>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									 <button type="submit" class="btn btn-light btn-round px-5"><i class="fa fa-save"></i>&nbsp;&nbsp;Update</button>
								</div>
							</div>
						</div>
							
						
						
					</div>
					</form>
					<?php
							$Update = new EmployeeController();
          					$Update -> ctrUpdateEmp();
          					?>

				</div>
			</div>
		</div>
	</div>