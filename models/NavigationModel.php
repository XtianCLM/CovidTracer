<?php

require_once "connection.php";
/**
 * 
 */
class NavigationModel extends connection
{
	static public function mdlShowTravelHistory(){
		$stmt = (new Connection)->connect()->prepare("SELECT EstabName, CitCode, Fullname, Dates FROM travelhistory ORDER BY Dates");
		$stmt -> execute();
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	


static public function mdlShowCitHist($table, $data){
		$stmt = (new Connection)->connect()->prepare("SELECT EstabName, CitCode, Fullname, Dates FROM travelhistory WHERE Fullname = ? AND Dates = ? OR CitCode = ? AND Dates = ? ORDER BY Dates");
		// $stmt->bindParam(trim(":CitCode"), $data["CitCode"], PDO::PARAM_STR);
		// $stmt->bindParam(":Dates", $data["Dates"], PDO::PARAM_STR);
		$stmt -> execute(array($data['CitCode'],  $data['Dates'], $data['CitCode'], $data['Dates']));
		return $stmt -> fetchAll();
		$stmt -> close();
		$stmt = null;
	}	

}