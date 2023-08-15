<?php
		require_once "connection.php";

class FacilitiesModel extends connection
{

	static public function addFacilitiesModel($table, $data){

		$stmt = (new connection)->connect()->prepare("INSERT INTO $table(FacCode, FacName, FacLocation, FacRooms) VALUES (:FacCode, :FacName, :FacLocation, :FacRooms)");


		$stmt->bindParam(":FacCode", $data["FacCode"], PDO::PARAM_STR);
		$stmt->bindParam(":FacName", $data["FacName"], PDO::PARAM_STR);
		$stmt->bindParam(":FacLocation", $data["FacLocation"], PDO::PARAM_STR);
		$stmt->bindParam("FacRooms", $data["FacRooms"], PDO::PARAM_STR);



		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;
	}

	static public function addPersonModel($table, $data){

		$stmt = (new connection)->connect()->prepare("INSERT INTO $table(Facility, Fullname, Status, Address, Room) VALUES (:Facility, :Fullname, :Status, :Address, :Room)");


		$stmt->bindParam(":Facility", $data["Facility"], PDO::PARAM_STR);
		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		$stmt->bindParam(":Status", $data["Status"], PDO::PARAM_STR);
		$stmt->bindParam("Address", $data["Address"], PDO::PARAM_STR);
		$stmt->bindParam("Room", $data["Room"], PDO::PARAM_INT);



		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;
	}
	static public function mdlUpdatePerson($table, $data){
		$stmt = (new Connection)->connect()->prepare("UPDATE $table SET Facility = :Facility, Fullname = :Fullname, Status = :Status, Address = :Address, Room = :Room WHERE id = :id");

		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":Facility", $data["Facility"], PDO::PARAM_STR);
		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		$stmt->bindParam(":Status", $data["Status"], PDO::PARAM_STR);
		$stmt->bindParam(":Address", $data["Address"], PDO::PARAM_STR);
		$stmt->bindParam(":Room", $data["Room"], PDO::PARAM_STR);
		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;
		
}

		static public function mdlShowFacilities(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, Facility, Fullname, Status, Address, Room FROM enterfacilities ORDER BY id");
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

	
	static public function mdlShowFacilitiesName(){
		$stmt = (new connection)->connect()->prepare("SELECT FacName FROM facilities");
		$stmt -> execute();
		return $stmt-> fetchAll();
		$stmt ->close();
		$stmt = null;
	}

	static public function mdlDeletePerson($table, $data){
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