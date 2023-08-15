<?php
         
if (isset($_SESSION)) {
    
    $Email = $_SESSION['estab_login'];

             $stmt =(new Connection)->connect()->prepare("SELECT id, Fullname, EstabName, Username, Phone, Address, Gender, roles, Status FROM masterlogin WHERE Email = :Email ");

            $stmt->bindParam(":Email", $Email);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $dbid = $row["id"];
                $dbfullname = $row["Fullname"];  
                $dbestabname = $row["EstabName"];             
                $dbusername = $row["Username"];
                $dbphone = $row["Phone"];
                $dbaddress = $row["Address"];
                $dbgender = $row["Gender"];
                $dbroles = $row["roles"];
                $dbstatus = $row["Status"];
       
               
            }

            if ($stmt->rowCount()>0) {

                    $id = $dbid;
                    $fullname = $dbfullname;
                    $estabname = $dbestabname;
                    $username = $dbusername;
                    $phone = $dbphone;
                    $address = $dbaddress;
                     $gender = $dbgender;
                      $roles = $dbroles;
                      $status = $dbstatus;
                  

                    }



}

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
									<p class="text-secondary mb-1"> <?php echo $roles ; ?></p>
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
									<h6 class="mb-0">Owner Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="fname" value=" <?php echo $fullname ; ?>" required>
								</div>
							</div>

							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Establishment Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="estabname" value=" <?php echo $estabname ; ?>" required>
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
									<input type="text" class="form-control" name="address" value=" <?php echo $address ; ?>" required>
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
							$Update = new EstablishmentCotrollers();
          					$Update -> ctrUpdateEstAcc();
          					?>

				</div>
			</div>
		</div>
	</div>