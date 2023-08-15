<?php


/**
 * 
 */
class ModelUpdateEstAcc 
{

	static public function addCitizenModel($table, $data){

		$stmt = (new connection)->connect()->prepare("INSERT INTO $table(EstabName, CitCode, Fullname, Dates) VALUES (:EstabName, :CitCode, :Fullname, :Dates)");

		$stmt->bindParam(":EstabName", $data["EstabName"], PDO::PARAM_STR);
		$stmt->bindParam(":CitCode", $data["CitCode"], PDO::PARAM_STR);
		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		$stmt->bindParam(":Dates", $data["Dates"], PDO::PARAM_STR);
		


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;
	}


	static public function mdlShowEstab(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, Fullname, EstabName, Address, Status, roles, Code FROM masterlogin WHERE roles = 'establishment' AND Code != 'Waiting for Verification' ORDER BY id");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	
	static public function mdlShowEstabVer(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, Fullname, EstabName, Address, Code FROM masterlogin WHERE roles = 'establishment' AND Code = 'Waiting for Verification' ORDER BY id");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	


	static public function mdlShowHistory(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, EstabName, CitCode, Fullname, Dates FROM travelhistory ORDER BY Dates");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}

	static public function mdlUpdateEstAcc($table, $data){
		$stmt = (new Connection)->connect()->prepare("UPDATE $table SET Fullname = :Fullname, EstabName = :EstabName, Phone = :Phone, Gender = :Gender, Address = :Address, Username = :Username WHERE id = :id");

		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		$stmt->bindParam(":EstabName", $data["EstabName"], PDO::PARAM_STR);
		$stmt->bindParam(":Phone", $data["Phone"], PDO::PARAM_STR);
		$stmt->bindParam(":Gender", $data["Gender"], PDO::PARAM_STR);
		$stmt->bindParam(":Address", $data["Address"], PDO::PARAM_STR);
		$stmt->bindParam(":Username", $data["Username"], PDO::PARAM_STR);
		


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}
	static public function mdlUpdateEst($table, $data){
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


	static public function mdlDeleteAccEst($table, $data){
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