<?php
		require_once "connection.php";

class RtpcrModel extends connection
{


	static public function addRtpcrModel($table, $data){

		$stmt = (new connection)->connect()->prepare("INSERT INTO $table(TestCode, TestResult, Fullname, Address, Dates) VALUES (:TestCode, :TestResult, :Fullname, :Address, :Dates)");


		$stmt->bindParam(":TestCode", $data["TestCode"], PDO::PARAM_STR);
		$stmt->bindParam(":TestResult", $data["TestResult"], PDO::PARAM_STR);
		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		$stmt->bindParam("Address", $data["Address"], PDO::PARAM_STR);
		$stmt->bindParam("Dates", $data["Dates"], PDO::PARAM_STR);


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}
		$stmt->close();
		$stmt = null;
	}

		static public function mdlShowRtpcr(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, TestCode, TestResult, Fullname, Address, Dates FROM rtpcr  WHERE TestResult ='Pending' ORDER BY Dates ");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	

	static public function mdlShowRtpcrPN(){
		$stmt = (new Connection)->connect()->prepare("SELECT id, TestCode, TestResult, Fullname, Address, Dates FROM rtpcr  WHERE TestResult ='Positive' OR TestResult = 'Negative' ORDER BY TestResult ");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	

	static public function mdlDeleteTest($table, $data){
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

	static public function mdlUpdateTest($table, $data){
		$stmt = (new Connection)->connect()->prepare("UPDATE $table SET Fullname = :Fullname, Address = :Address, TestCode = :TestCode, TestResult = :TestResult, Dates = :Dates WHERE id = :id");

		$stmt->bindParam(":id", $data["id"], PDO::PARAM_INT);
		$stmt->bindParam(":Fullname", $data["Fullname"], PDO::PARAM_STR);
		
		$stmt->bindParam(":Address", $data["Address"], PDO::PARAM_STR);
		$stmt->bindParam(":TestCode", $data["TestCode"], PDO::PARAM_STR);
		$stmt->bindParam(":TestResult", $data["TestResult"], PDO::PARAM_STR);
		$stmt->bindParam(":Dates", $data["Dates"], PDO::PARAM_STR);
		


		if($stmt->execute()){
			return "ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}		
		

	static public function mdlShowLocation(){
		$stmt = (new connection)->connect()->prepare("SELECT Brgy FROM zonelist");
		$stmt -> execute();
		return $stmt-> fetchAll();
		$stmt ->close();
		$stmt = null;
	}



	static public function mdlShowPositive(){
		$stmt = (new connection)->connect()->prepare("SELECT COUNT(TestResult) FROM rtpcr WHERE TestResult = 'Positive' ");
		$stmt -> execute();
		return $stmt->fetchColumn();
		$stmt ->close();
		$stmt = null;
	}

	static public function mdlShowNegative(){
		$stmt = (new connection)->connect()->prepare("SELECT COUNT(TestResult) FROM rtpcr WHERE TestResult = 'Negative' ");
		$stmt -> execute();
		return $stmt->fetchColumn();
		$stmt ->close();
		$stmt = null;
	}
	static public function mdlShowPending(){
		$stmt = (new connection)->connect()->prepare("SELECT COUNT(TestResult) FROM rtpcr WHERE TestResult = 'Pending' ");
		$stmt -> execute();
		return $stmt->fetchColumn();
		$stmt ->close();
		$stmt = null;
	}




}

?>