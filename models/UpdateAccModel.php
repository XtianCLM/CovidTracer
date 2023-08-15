<?php


/**
 * 
 */
class ModelUpdateAcc 
{
	
	static public function mdlUpdateAcc($table, $data){
		$stmt = (new Connection)->connect()->prepare("UPDATE $table SET Fullname = :Fullname, Phone = :Phone, Gender = :Gender, Address = :Address, Username = :Username WHERE id = :id");

		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		
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
	static public function mdlShowCitHistory(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, EstabName, CitCode, Fullname, Dates FROM travelhistory ORDER BY Dates");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}
	

}