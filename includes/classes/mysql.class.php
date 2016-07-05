<?php
class MYSQL {

	// Costruttore
	var $mysql;
	function __construct() {
		# connessione al DBMS
		$this->mysql = new mysqli(db_hostname, db_username, db_password) or die('Mysql error: ' . mysqli_error());
		# selezione del database
		 $this->mysql->select_db(db_database) or die('Database error: ' . $this->mysql->error());
		 
	}


	function query($query) {
		$query = $this->mysql->query($query);
		return $query;
	}

	function escape_string($string){
		$string =$this->mysql->real_escape_string($string);
		return $string;
	}

	function fetch_assoc($result) {
		$extract = $this->mysql->fetch_assoc($result);
		return $extract;
	}

	function fetch_array($result) {
		$extract = $this->mysql->fetch_array($result);
		return $extract;
	}

	function fetch_row($result) {
		$extract =$this->mysql->fetch_row($result);
		return $extract;
	}

	function num_fields($result){
		$extract = $this->mysql->num_fields($result);
		return $result;
	}

	function close() {
		$this->mysql->close();
	}

}
