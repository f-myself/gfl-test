<?php

include "app/config/DBConfig.php";
class Mysql
{
	public $connectionString;
	
	protected $databaseName;
	protected $hostName;
	protected $userName;
	protected $passCode;

	function Mysql()
	{
		$this -> connectionString = NULL;

		$this -> databaseName = DB_NAME; // $dbParams -> dbName;
		$this -> hostName = DB_HOST; //$dbParams -> serverName;
		$this -> userName = DB_USER; //$dbParams -> userName;
		$this -> passCode = DB_PASSWORD; //$dbParams -> passCode;
	}

	function dbConnect()
	{
		$this -> connectionString = mysqli_connect($this -> hostName, $this -> userName, $this -> passCode, $this -> databaseName);
		return $this -> connectionString;
	}

	function dbDisconnect() {
	mysqli_close($this -> connectionString);
		$this -> connectionString = NULL;
	           
		$this -> databaseName = NULL;
		$this -> hostName = NULL;
		$this -> userName = NULL;
		$this -> passCode = NULL;
	}
}