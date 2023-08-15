<?php


class ControllerSignUp{
	static public function ctrCreateAcc(){
		if(isset($_POST["Fullname"])){
		   	$table = "masterlogin";

		   		// $password = trim($_POST['Password']);
        
       //  $options = array("cost"=>4);
       //  $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);

		   	$data = array("Status"=>$_POST["Status"],
		   				  "Fullname"=>$_POST["Fullname"],
		   				  "Email"=>$_POST["Email"],
		   				  "Username"=>$_POST["Username"],
				          "Password"=>$_POST["Password"],
				          "Phone"=>$_POST["Phonenum"],
				          "Address"=>$_POST["Address"],
				          "Gender"=>$_POST["gender"],
				      		"roles"=>$_POST["roles"],
				      		"Code"=>$_POST["Code"],
		   					"EstabName"=>$_POST["EstabName"]);


		   	$answer = (new ModelSignUp)->mdlAddAcc($table, $data);

		   	if($answer == "ok"){
				echo'<script>
					 Swal.fire("Sign Up Succesfully")

				</script>';
			}

		}
	}


}

?>