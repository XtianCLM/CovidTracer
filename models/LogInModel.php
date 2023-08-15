<?php
session_start();
require_once "connection.php";

class ModelSignIN{

	static public function mdlSignInAcc($table, $email, $password, $roles){

			$stmt =(new Connection)->connect()->prepare("SELECT email, password, roles FROM $table WHERE email = :email AND password=:password AND roles = :roles");

			$stmt->bindParam(":email", $email);
			$stmt->bindParam(":password", $password);
			$stmt->bindParam(":roles", $roles);
			$stmt->execute();

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				
				$dbemail = $row["email"];
				$dbpassword = $row["password"];
				$dbroles = $row["roles"];
			}
			if ($stmt->rowCount()>0) {
			
				if ($email == $dbemail AND $password == $dbpassword AND $roles == $dbroles) {
					
					switch ($dbroles) {
						case 'admin':
							$_SESSION['admin_login'] = $email;
							echo'<script>
					 Swal.fire({
					  type: "success",
					  title: "Welcome, You have successfully login",
					  showConfirmButton: true,
					  confirmButtonText: "Ok"
					  }).then(function(result){
								if (result.value) {
								 window.location.href ="views/Mainmodules/Main.php";
								}
							})


				</script>';
							break;
						case 'employee':
							$_SESSION['employee_login'] = $email;
							echo'<script>
					 Swal.fire({
					  type: "success",
					  title: "Welcome, You have successfully login",
					  showConfirmButton: true,
					  confirmButtonText: "Ok"
					  }).then(function(result){
								if (result.value) {
								 window.location.href ="views/Mainmodules/Main.php";
								}
							})


				</script>';
							break;

						case 'citizen':
							$_SESSION['citizen_login'] = $email;
							echo'<script>
					 Swal.fire({
					  type: "success",
					  title: "Welcome, You have successfully login",
					  showConfirmButton: true,
					  confirmButtonText: "Ok"
					  }).then(function(result){
								if (result.value) {
								 window.location.href ="views/Citizen.php";
								}
							})


				</script>';
							break;

						case 'establishment':
							$_SESSION['estab_login'] = $email;
							echo'<script>
					 Swal.fire({
					  type: "success",
					  title: "Welcome, You have successfully login",
					  showConfirmButton: true,
					  confirmButtonText: "Ok"
					  }).then(function(result){
								if (result.value) {
								 window.location.href ="views/Citizen.php";
								}
							})

				</script>';
							break;
						
						default:
							echo'<script>
					 Swal.fire("wrong email or password or role here")

				</script>';
						
					}
				}
				else 
				{
						echo'<script>
					 Swal.fire("wrong email or password or role")

				</script>';
				}

			}
			else 
				{
						echo'<script>
					 Swal.fire("wrong email or password or role")

				</script>';
				}
			

		
}


	// static public function mdlgetphone($email){

	// 	 $stmt =(new Connection)->connect()->prepare("SELECT Phone FROM masterlogin WHERE Email = :Email ");

 //            $stmt->bindParam(":Email", $Email);
 //            $stmt->execute();

 //            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
 //                $dbphone = $row["Phone"];
               
 //            }

 //            if ($stmt->rowCount()>0) {

 //                  return $dbphone;

 //                    }


	// 	}


	}

	
	

	

