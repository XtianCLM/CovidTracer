<?php

/**
 * 
 */
class EmployeeController
{
	static public function addEmployeeCtr(){
		if (isset($_POST['Fullname'])) {
			$table = "masterlogin";
			$data = array(
					"Fullname"=>$_POST["Fullname"],
					"Email"=>$_POST["Email"],
					"Phone"=>$_POST["Phone"],
					"Gender"=>$_POST["Gender"],
					"Address"=>$_POST["Address"],
					"Username"=>$_POST["Username"],
					"Password"=>$_POST["Password"],
					"roles"=>$_POST["roles"],
					"Status"=>$_POST["Status"]);



			 	$answer = (new ListEmployee)->addEmployeeModel($table, $data);

		   	if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Account has been added successfully!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "Userprofile";
								}
							})
				</script>';
			}
		}
	
}
	static public function ctrShowEmployee(){
		$answer = (new ListEmployee)->mdlShowEmployee();
		return $answer;
	}



	static public function ctrUpdateEmp(){
		if(isset($_POST["fname"])){
		   	$table = "masterlogin";

		   	$data = array("id"=>$_POST["id"],
		   				  "Fullname"=>$_POST["fname"],
				          "Phone"=>$_POST["phone"],
				          "Gender"=>$_POST["gender"],
				          "Address"=>$_POST["address"],
				          "Username"=>$_POST["username"],
				      		"Status"=>$_POST["status"]);
				          

		   	$answer = (new ListEmployee)->mdlUpdateEmp($table, $data);
		   		if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Employee has been successfully Updated",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "Userprofile";
								}
							})
				</script>';
			}	
		}
}

static public function ctrShowLocation(){
		$answer = (new ListEmployee)->mdlShowLocation();
		return $answer;
	}	

static public function ctrDeleteEmp(){
		if(isset($_GET["idEmployee"])){
			$table ="masterlogin";
			$data = $_GET["idEmployee"];
			$answer = (new ListEmployee)->mdlDeleteEmp($table, $data);
			if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Account has been successfully deleted!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "Userprofile";
								}
							})
				</script>';
			}		
		}
	}			
	




}




?>