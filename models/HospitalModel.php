<?php
		require_once "connection.php";

class HospitalModel extends connection
{

		static public function addHospitalModel($table, $data){

		$stmt = (new connection)->connect()->prepare("INSERT INTO $table(HospitalName, Location, AvailableRoom, Legend) VALUES (:HospitalName, :Location, :AvailableRoom, :Legend)");


		$stmt->bindParam(":HospitalName", $data["HospitalName"], PDO::PARAM_STR);
		$stmt->bindParam(":Location", $data["Location"], PDO::PARAM_STR);
		$stmt->bindParam(":AvailableRoom", $data["AvailableRoom"], PDO::PARAM_STR);
		$stmt->bindParam("Legend", $data["Legend"], PDO::PARAM_STR);


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;
	}



		static public function mdlShowHospital(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, HospitalName, Location, AvailableRoom, Legend FROM hospital ORDER BY id");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	

	static public function mdlShowLocation(){
		$stmt = (new connection)->connect()->prepare("SELECT Brgy FROM zonelist");
		$stmt -> execute();
		return $stmt-> fetchAll();
		$stmt ->close();
		$stmt = null;
	}
	static public function mdlUpdateHospital($table, $data){
		$stmt = (new Connection)->connect()->prepare("UPDATE $table SET HospitalName = :HospitalName, Location = :Location, AvailableRoom = :AvailableRoom, Legend = :Legend WHERE id = :id");

		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":HospitalName", $data["HospitalName"], PDO::PARAM_STR);
		$stmt->bindParam(":Location", $data["Location"], PDO::PARAM_STR);
		$stmt->bindParam(":AvailableRoom", $data["AvailableRoom"], PDO::PARAM_STR);
		$stmt->bindParam(":Legend", $data["Legend"], PDO::PARAM_STR);


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}

	static public function mdlDeleteHospital($table, $data){
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