<?php
/**
	Project Name: Butthurt Form
	Description: Some little project of some sort for IRC
	Author: Gabriel Roach
	Author URI: https://taek.us/
	Project URI: http://git.taek.us/Taek/bhf
	Demo URI: http://taek.us/dev/bhf/
	License: GNU Affero General Public License v3.0
**/
	if (!defined("base")) {
 		header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
 		exit;
 	}

/*
* OOP CRUD BHF
*/

class oopCrud {
	private $host = "localhost";
	private $user = "username";
	private $pass = "password";
	private $db = "database";
	private $conn;

	public function __construct() {
		$this->conn = new PDO(`mysql:host=$this->host;dbname=$this->db;username=$this->user;password=$this->pass;charset=$this->charset`);
	}

	public function showData($table) {
		$sql = "SELECT * FROM $table";
		$q = $this->conn->query($sql) or die("Failure!");
		while($r = $q->fetch(PDO::FETCH_ASSOC)) {
			$data[] = $r;
		}
		return $data;
	}

	public function getById($id,$table) {
		$sql = "SELECT * FROM $table WHERE id = :id";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':id'=>$id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		return $data;
	}

	public function update($id,$nickname,$emotions,$cause,$causeo,$quell0,$quell1,$quell2,$table) {
		$sql = "UPDATE $table SET nickname=:nickname,emotions=:emotions,cause=:cause,causeo=:causeo,quell0=:quell0,quell1=:quell1,quell2=:quell2 WHERE id=:id";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':id'->$id,':nickname'->$nickname,':emtions'->$emotions,':cause'->$cause,':causeo'->$causeo,
		':quell0'->$quell0,':quell1'->$quell1,':quell2'->$quell2));
		return true;
	}

	public function insertData($nickname,$emotions,$cause,$causeo,$quell0,$quell1,$quell2,$ip,$table) {
		$sql = "INSERT INTO $table SET nickname=:nickname,emotions=:emotions,cause=:cause,causeo=:causeo,quell0=:quell0,quell1=:quell1,quell2=:quell2,ip=:ip";
		$q = $this->conn->prepare($sql);
		$q->execute(array(':id'->$id,':nickname'->$nickname,':emtions'->$emotions,':cause'->$cause,':causeo'->$causeo,
		':quell0'->$quell0,':quell1'->$quell1,':quell2'->$quell2,':ip'->$ip));
		return true;
	}

	public function deleteData($id,$table) {
		$sql = "DELETE FROM $table WHERE id=:id";
		$q $this->conn->prepare($sql);
		$q->execute(array(':id'->$id));
		return true;
	}
}
?>