<?php

/**
 * 
 */
class RtpcrController
{
static public function addRtpcrCtr(){
		
		if (isset($_POST['TestCode'])) {
			$table = "rtpcr";
			$data = array(
					"TestCode"=>$_POST["TestCode"],
					"TestResult"=>$_POST["Result"],
					"Fullname"=>$_POST["Fullname"],
					"Address"=>$_POST["Address"],
					"Dates"=>$_POST["datepicker"]);



			 	$answer = (new RtpcrModel)->addRtpcrModel($table, $data);

		   	if($answer == "ok"){
				echo'<script>

				alert(success);
				</script>';
			}
		}
	
}
	static public function ctrShowRtpcr(){
		$answer = (new RtpcrModel)->mdlShowRtpcr();
		return $answer;
	}		
	static public function ctrShowRtpcrPN(){
		$answer = (new RtpcrModel)->mdlShowRtpcrPN();
		return $answer;
	}	

	// static public function ctrShowRtpcrP(){
	// 	$answer = (new RtpcrModel)->mdlShowPositive();
	// 	return $answer;
	// }		

	static public function ctrShowLocation(){
		$answer = (new RtpcrModel)->mdlShowLocation();
		return $answer;
	}

	static public function ctrShowPostive(){
		$answer = (new RtpcrModel)->mdlShowPositive();
		return $answer;
	}

	static public function ctrShowNegative(){
		$answer = (new RtpcrModel)->mdlShowNegative();
		return $answer;
	}

	static public function ctrShowPending(){
		$answer = (new RtpcrModel)->mdlShowPending();
		return $answer;
	}

static public function ctrUpdateTest(){
		if(isset($_POST["Fullname"])){
		   	$table = "rtpcr";

		   	$data = array("id"=>$_POST["id"],
		   				  "Fullname"=>$_POST["Fullname"],
				          "Address"=>$_POST["Address"],
				          "TestCode"=>$_POST["TestCode"],
				          "TestResult"=>$_POST["TestResult"],
				          "Dates"=>$_POST["Dates"]);
				          

		   	$answer = (new RtpcrModel)->mdlUpdateTest($table, $data);
		   	if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Test has been successfully Updated",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "RTPCR";
								}
							})
				</script>';
			}		

		}
}

	static public function ctrDeleteTest(){
		if(isset($_GET["idTest"])){
			$table ="rtpcr";
			$data = $_GET["idTest"];
			$answer = (new RtpcrModel)->mdlDeleteTest($table, $data);
			if($answer == "ok"){
				echo'<script>
				Swal.fire({
					  type: "success",
					  title: "Test has been successfully deleted!",
					  showConfirmButton: true,
					  confirmButtonText: "Close"
					  }).then(function(result){
								if (result.value) {
								window.location = "RTPCR";
								}
							})
				</script>';
			}		
		}
	}			
		
	



}

?>