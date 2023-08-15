<?php
		require_once "connection.php";

class CitizenModel extends connection
{
		static public function mdlShowCitizen(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, Fullname, Email, Address, Status, roles, Code FROM masterlogin WHERE roles = 'citizen' AND Code != 'Waiting for Verification' ORDER BY id");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	
	static public function mdlShowCitizenVer(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, Fullname, Email, Address, Code FROM masterlogin WHERE roles = 'citizen' AND Code = 'Waiting for Verification' ORDER BY id");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	

	static public function mdlShowCitHistory(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, EstabName, CitCode, Fullname, Dates FROM travelhistory ORDER BY Dates");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}



	static public function mdlUpdateCit($table, $data){
		$stmt = (new Connection)->connect()->prepare("UPDATE $table SET Fullname = :Fullname, Phone = :Phone, Gender = :Gender, Address = :Address, Username = :Username, Status = :Status, Code = :Code WHERE id = :id");

		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		$stmt->bindParam(":Phone", $data["Phone"], PDO::PARAM_STR);
		$stmt->bindParam(":Gender", $data["Gender"], PDO::PARAM_STR);
		$stmt->bindParam(":Address", $data["Address"], PDO::PARAM_STR);
		$stmt->bindParam(":Username", $data["Username"], PDO::PARAM_STR);
		$stmt->bindParam(":Status", $data["Status"], PDO::PARAM_STR);
		$stmt->bindParam(":Code", $data["Code"], PDO::PARAM_STR);
		


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}


	static public function mdlDeleteAccCit($table, $data){
		$stmt = (new Connection)->connect()->prepare("DELETE FROM $table WHERE id = :id");
		$stmt -> bindParam(":id", $data, PDO::PARAM_INT);
		if($stmt -> execute()){
			return "ok";
		}else{
			return "error";	
		}
		$stmt -> close();
		$stmt = null;
	}	




	
	


}




?>