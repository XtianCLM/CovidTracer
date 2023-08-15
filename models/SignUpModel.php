<?php

require_once "connection.php";

class ModelSignUp{
	static public function mdlAddAcc($table, $data){

		$stmt = (new Connection)->connect()->prepare("INSERT INTO $table(Fullname, Email, Username, Password, Phone, Address, Gender, roles, Status, Code, EstabName) VALUES (:Fullname, :Email, :Username, :Password, :Phone, :Address, :Gender, :roles, :Status, :Code, :EstabName)");

		

		$stmt->bindParam(":Status", $data["Status"], PDO::PARAM_STR);
		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		$stmt->bindParam(":Email", $data["Email"], PDO::PARAM_STR);	
		$stmt->bindParam(":Username", $data["Username"], PDO::PARAM_STR);
		$stmt->bindParam(":Password", $data["Password"], PDO::PARAM_STR);
		$stmt->bindParam(":Phone", $data["Phone"], PDO::PARAM_STR);
		$stmt->bindParam(":Address", $data["Address"], PDO::PARAM_STR);
		$stmt->bindParam(":Gender", $data["Gender"], PDO::PARAM_STR);
		$stmt->bindParam(":roles", $data["roles"], PDO::PARAM_STR);
		$stmt->bindParam(":Code", $data["Code"], PDO::PARAM_STR);
		$stmt->bindParam(":EstabName", $data["EstabName"], PDO::PARAM_STR);


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;

	}



}