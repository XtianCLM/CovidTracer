<?php



	/**
	 * 
	 */
	class NavigationControllers 
	{
		
		static public function ctrShowTravelHistory(){
		$answer = (new NavigationModel)->mdlShowTravelHistory();
		return $answer;
	}		


	static public function ctrShowCitHist(){
		if (isset($_POST['code'])) {
			$table = "travelhistory";
			$data = array(
					"CitCode"=>$_POST["code"],
					"Dates"=>$_POST["dates"]);
		$answer = (new NavigationModel)->mdlShowCitHist($table,$data);
		return $answer;

	}
	}		
		
	}