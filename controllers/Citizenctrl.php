<?php

/**
 * 
 */
class CitizenController
{

	static public function ctrShowCitizen(){
		$answer = (new CitizenModel)->mdlShowCitizen();
		return $answer;
	}		
	static public function ctrShowCitizenVer(){
		$answer = (new CitizenModel)->mdlShowCitizenVer();
		return $answer;
	}	
	static public function ctrShowCitHistory(){
		$answer = (new CitizenModel)->mdlShowCitHistory();
		return $answer;
	}

	static public function ctrUpdateCit(){
		if(isset($_POST["fname"])){
		   	$table = "masterlogin";

		   	$data = array("id"=>$_POST["id"],
		   				  "Fullname"=>$_POST["fname"],
				          "Phone"=>$_POST["phone"],
				          "Gender"=>$_POST["gender"],
				          "Address"=>$_POST["address"],
				          "Username"=>$_POST["username"],
				      		"Status"=>$_POST["status"],
				      		"Code"=>$_POST["code"]);
				          

		   	$answer = (new CitizenModel)->mdlUpdateCit($table, $data);
		   		if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Account has been Verified",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "citizen";
								}
							})
				</script>';
			}	
		}
}


static public function ctrDeleteAccCit(){
		if(isset($_GET["DelidCitVer"])){
			$table ="masterlogin";
			$data = $_GET["DelidCitVer"];
			$answer = (new CitizenModel)->mdlDeleteAccCit($table, $data);
			if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Account has been successfully deleted!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "citizen";
								}
							})
				</script>';
			}		
		}
	}	

}