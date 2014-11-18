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
	public function openConnection() { /*this function will open connection*/
		$this->connection = new msqli($this->host, $this->username, $this->password, $this->database);

		if($this->connection->connect_error) { /*echo the error if there is one*/
 			die("Error: " . $this->connection->connection_error);
 		} 
	}
	public function closeConnection() { /*this will close it*/
		if(isset($this->conncection)) { /*isset checks if the variable contains information*/
			$this->connection->close(); 	/*closes this connection*/
		}

	}
	public function query($string) {

	}


}