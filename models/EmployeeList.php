<?php
		require_once "connection.php";

class ListEmployee 
{
	static public function addEmployeeModel($table, $data){

		$stmt = (new connection)->connect()->prepare("INSERT INTO $table(Fullname, Email, Phone, Gender, Address, Username, Password, roles, Status) VALUES (:Fullname, :Email, :Phone, :Gender, :Address, :Username, :Password, :roles, :Status)");


		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		$stmt->bindParam(":Email", $data["Email"], PDO::PARAM_STR);
		$stmt->bindParam(":Phone", $data["Phone"], PDO::PARAM_STR);
		$stmt->bindParam(":Gender", $data["Gender"], PDO::PARAM_STR);
		$stmt->bindParam(":Address", $data["Address"], PDO::PARAM_STR);
		$stmt->bindParam(":Username", $data["Username"], PDO::PARAM_STR);
		$stmt->bindParam("Password", $data["Password"], PDO::PARAM_STR);
		$stmt->bindParam("roles", $data["roles"], PDO::PARAM_STR);
		$stmt->bindParam("Status", $data["Status"], PDO::PARAM_STR);


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;
	}


	static public function mdlShowEmployee(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, Fullname, Email, Address, Username, roles FROM masterlogin WHERE roles = 'Admin' || roles = 'employee' ORDER BY id");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	
	}

	static public function mdlUpdateEmp($table, $data){
		$stmt = (new Connection)->connect()->prepare("UPDATE $table SET Fullname = :Fullname, Phone = :Phone, Gender = :Gender, Address = :Address, Username = :Username, Status = :Status WHERE id = :id");

		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		
		$stmt->bindParam(":Phone", $data["Phone"], PDO::PARAM_STR);
		$stmt->bindParam(":Gender", $data["Gender"], PDO::PARAM_STR);
		$stmt->bindParam(":Address", $data["Address"], PDO::PARAM_STR);
		$stmt->bindParam(":Username", $data["Username"], PDO::PARAM_STR);
		$stmt->bindParam(":Status", $data["Status"], PDO::PARAM_STR);
		


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}


	static public function mdlDeleteEmp($table, $data){
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
		
		static public function mdlShowLocation(){
		$stmt = (new connection)->connect()->prepare("SELECT Brgy FROM zonelist");
		$stmt -> execute();
		return $stmt-> fetchAll();
		$stmt ->close();
		$stmt = null;
	}
	


}




?>