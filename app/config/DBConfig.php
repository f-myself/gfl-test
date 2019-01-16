<?php

class DBConfig
{
	protected $serverName;
	protected $userName;
	protected $passCode;
	protected $dbName;

	function DBConfig() {
		$this -> serverName = 'localhost';
		$this -> userName = 'root';
		$this -> passCode = '';
		$this -> dbName = 'book_shop';
	}
}