<?php

include "app/config/DBConfig.php";
class Mysql extends DBConfig
{
	public $connectionString;
	
	protected $databaseName;
	protected $hostName;
	protected $userName;
	protected $passCode;

	function Mysql()
	{
		$this -> connectionString = NULL;

		$dbParams = new DBConfig();
		$this -> databaseName = $dbParams -> dbName;
		$this -> hostName = $dbParams -> serverName;
		$this -> userName = $dbParams -> userName;
		$this -> passCode = $dbParams -> passCode;
		$dbParams = NULL;

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