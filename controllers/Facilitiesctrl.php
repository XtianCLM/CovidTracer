<?php

/**
 * 
 */
class FacilitiesController
{

	static public function addFacilitiesCtr(){
		if (isset($_POST['FacCode'])) {
			$table = "facilities";
			$data = array(
					"FacCode"=>$_POST["FacCode"],
					"FacLocation"=>$_POST["FacLocation"],
					"FacName"=>$_POST["FacName"],
					"FacRooms"=>$_POST["FacRooms"]);



			 	$answer = (new FacilitiesModel)->addFacilitiesModel($table, $data);

		   	if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Facility has been added successfully!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "quarantine";
								}
							})
				</script>';
			}
		}
}

static public function addPersonCtr(){
		if (isset($_POST['Fullname'])) {
			$table = "enterfacilities";
			$data = array(
					"Fullname"=>$_POST["Fullname"],
					"Status"=>$_POST["Status"],
					"Facility"=>$_POST["Facility"],
					"Address"=>$_POST["Address"],
					"Room"=>$_POST["Room"]);



			 	$answer = (new FacilitiesModel)->addPersonModel($table, $data);

		   	if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Person has been added successfully!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "quarantine";
								}
							})
				</script>';
			}
		}
}

static public function ctrUpdatePerson(){
		if (isset($_POST['Fullname'])) {
			$table = "enterfacilities";
			$data = array("id"=>$_POST["id"],
					"Fullname"=>$_POST["Fullname"],
					"Status"=>$_POST["Status"],
					"Facility"=>$_POST["Facility"],
					"Address"=>$_POST["Address"],
					"Room"=>$_POST["Room"]);
				          

		   	$answer = (new FacilitiesModel)->mdlUpdatePerson($table, $data);
		   	if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Person has been successfully Updated",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "quarantine";
								}
							})
				</script>';
			}	

		}
	}

	static public function ctrShowFacilities(){
		$answer = (new FacilitiesModel)->mdlShowFacilities();
		return $answer;
	}		

	static public function ctrShowLocation(){
		$answer = (new FacilitiesModel)->mdlShowLocation();
		return $answer;
	}	

	static public function ctrShowFacilitiesName(){
		$answer = (new FacilitiesModel)->mdlShowFacilitiesName();
		return $answer;
	}

	static public function ctrDeletePerson(){
		if(isset($_GET["idDelete"])){
			$table ="enterfacilities";
			$data = $_GET["idDelete"];
			$answer = (new FacilitiesModel)->mdlDeletePerson($table, $data);
			if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Person deleted successfully!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "quarantine";
								}
							})
				</script>';
			}		
		}
	}			
		
}
