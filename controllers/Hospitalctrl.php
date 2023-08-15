<?php

/**
 * 
 */
class HospitalController
{

	static public function addHospitalCtr(){
		
		if (isset($_POST['hospitalname'])) {
			$table = "hospital";
			$data = array(
					"HospitalName"=>$_POST["hospitalname"],
					"Location"=>$_POST["location"],
					"AvailableRoom"=>$_POST["availableroom"],
					"Legend"=>$_POST["legend"]);



			 	$answer = (new HospitalModel)->addHospitalModel($table, $data);

		   	if($answer == "ok"){
				echo'<script>
			Swal.fire({
					  type: "success",
					  title: "Hospital successfully Added!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "Hospital";
								}
							})
				</script>';
			}
		}
	
}
	static public function ctrShowHospital(){
		$answer = (new HospitalModel)->mdlShowHospital();
		return $answer;
	}	

	static public function ctrShowLocation(){
		$answer = (new HospitalModel)->mdlShowLocation();
		return $answer;
	}
	static public function ctrUpdateHospital(){
		if(isset($_POST["hospitalname"])){
		   	$table = "hospital";

		   	$data = array("id"=>$_POST["id"],
		   				  "HospitalName"=>$_POST["hospitalname"],
				          "Location"=>$_POST["location"],
				          "AvailableRoom"=>$_POST["availableroom"],
				          "Legend"=>$_POST["legend"]);
				          

		   	$answer = (new HospitalModel)->mdlUpdateHospital($table, $data);
		   		if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Hospital successfully Updated!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "Hospital";
								}
							})
				</script>';
			}	
		}
}
	
	static public function ctrDeleteHospital(){
		if(isset($_GET["idDelHospital"])){
			$table ="hospital";
			$data = $_GET["idDelHospital"];
			$answer = (new HospitalModel)->mdlDeleteHospital($table, $data);
			if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Hospital has been successfully deleted!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "Hospital";
								}
							})
				</script>';
			}		
		}
	}

	


}