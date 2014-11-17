<?php
class Database { /*we use a class instead of a function because a class is an instance of an object that can be manipulated and changed in the future. It can be far more than just one set value. also it is better for organization*/
	private $connection; /*setting private variables so they cannot be changedoutside of this file*/
	private $host;
	private $username;
	private $password;
	private $database;

	public function __construct($host, $username, $password, $database) { /*accessing the global variables as local variables that will disapear once the function has been run*/
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
}