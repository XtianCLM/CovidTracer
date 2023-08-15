<?php

/**
 * 
 */
class ControllerAcc
{
	
	static public function ctrUpdateAcc(){
		if(isset($_POST["fname"])){
		   	$table = "masterlogin";

		   	$data = array("id"=>$_POST["id"],
		   				  "Fullname"=>$_POST["fname"],

				          "Phone"=>$_POST["phone"],
				          "Gender"=>$_POST["gender"],
				          "Address"=>$_POST["address"],
				          "Username"=>$_POST["username"]);
				          

		   	$answer = (new ModelUpdateAcc)->mdlUpdateAcc($table, $data);

		   	if($answer == "ok"){
				echo'<script>
					 Swal.fire({
					  type: "success",
					  title: "Account successfully Updated",
					  showConfirmButton: true,
					  confirmButtonText: "Ok"
					  }).then(function(result){
								if (result.value) {
								 window.location ="CitizenProfile";
								}
							})


				</script>';
			}
		}
}


static public function ctrShowCitHistory(){
		$answer = (new ModelUpdateAcc)->mdlShowCitHistory();
		return $answer;
	}

}

