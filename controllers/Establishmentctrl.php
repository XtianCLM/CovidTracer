<?php



/**
 * 
 */
class EstablishmentCotrollers 
{

		static public function addCitizenCtr(){
		
		if (isset($_POST['code'])) {
			$table = "travelhistory";
			$data = array(
					"EstabName"=>$_POST["estabname"],
					"CitCode"=>$_POST["code"],
					"Fullname"=>$_POST["fullname"],
					"Dates"=>$_POST["dates"]);

			 	$answer = (new ModelUpdateEstAcc)->addCitizenModel($table, $data);

		   	if($answer == "ok"){
				echo'<script>
			Swal.fire({
					  type: "success",
					  title: "Citizen successfully Added!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "ScanRecord";
								}
							})
				</script>';
			}
		}
	
}

	static public function ctrShowEstab(){
		$answer = (new ModelUpdateEstAcc)->mdlShowEstab();
		return $answer;
	}	
	static public function ctrShowEstabHistory(){
		$answer = (new ModelUpdateEstAcc)->mdlShowHistory();
		return $answer;
	}	
	static public function ctrShowEstabVer(){
		$answer = (new ModelUpdateEstAcc)->mdlShowEstabVer();
		return $answer;
	}	

		static public function ctrUpdateEstAcc(){
		if(isset($_POST["fname"])){
		   	$table = "masterlogin";

		   	$data = array("id"=>$_POST["id"],
		   				  "Fullname"=>$_POST["fname"],
		   				  "EstabName"=>$_POST["estabname"],
				          "Phone"=>$_POST["phone"],
				          "Gender"=>$_POST["gender"],
				          "Address"=>$_POST["address"],
				          "Username"=>$_POST["username"]);
				          

		   	$answer = (new ModelUpdateEstAcc)->mdlUpdateEstAcc($table, $data);

		   	if($answer == "ok"){
				echo'<script>
					 Swal.fire({
					  type: "success",
					  title: "Account successfully Updated",
					  showConfirmButton: true,
					  confirmButtonText: "Ok"
					  }).then(function(result){
								if (result.value) {
								 window.location ="establishment";
								}
							})


				</script>';
			}
		}
}
static public function ctrUpdateEst(){
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
				          

		   	$answer = (new ModelUpdateEstAcc)->mdlUpdateEst($table, $data);
		   		if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Account has been Verified",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "establishment";
								}
							})
				</script>';
			}	
		}
}

static public function ctrDeleteAccEst(){
		if(isset($_GET["DelidEstVer"])){
			$table ="masterlogin";
			$data = $_GET["DelidEstVer"];
			$answer = (new ModelUpdateEstAcc)->mdlDeleteAccEst($table, $data);
			if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Account has been successfully deleted!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "establishment";
								}
							})
				</script>';
			}		
		}
	}

	
}