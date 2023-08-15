<?php

class ControllerSignIn{
	static public function ctrLoginAcc(){
	// session_start();

	if (isset($_SESSION['admin_login'])) {
			echo'<script>
					 Swal.fire("Admin Sign Up Succesfully")

				</script>';
		}	
	if (isset($_SESSION['employee_login'])) {
			echo'<script>
					 Swal.fire("employee Sign Up Succesfully")

				</script>';
		}

	if (isset($_SESSION['citizen_login'])) {
			echo'<script>
					 Swal.fire("Citizen Sign Up Succesfully")

				</script>';
		}	

	if (isset($_SESSION['estab_login'])) {
			echo'<script>
					 Swal.fire("Establishment Sign Up Succesfully")

				</script>';
		}	



		if(isset($_POST['submit'])){
		$table = "masterlogin";
		 	
		 	$email = $_REQUEST['email'];
		 	$password = $_REQUEST['password'];
		 	$roles = $_REQUEST['roles'];
		


		 	if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
				if ($email AND $password AND $roles ) {
			$answer = (new ModelSignIN)->mdlSignInAcc($table, $email, $password, $roles);
		}	

		  	

		   }
		   else{
		   	echo'<script>
					 Swal.fire("Invalid Email!")

				</script>';
		   }



	 		

}

}


	// static public function getphone(){
	// 	if (isset($_SESSION['citizen_login'])) {
	// 		$email = $_SESSION['citizen_login'];


	// 		$answer = (new ModelSignIN)->mdlgetphone($email);

	// 		echo $answer;
	// 	}	

	// }

}



