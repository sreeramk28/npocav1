<?php
/**
 * 
 */
class Dbce 
{
	//Development
	private $servername = "localhost";
	private $dbusername = "root";
	private $dbpassword = "";
	private $dbname = "npocadb";

	//Production
	// private $servername = "sql12.freemysqlhosting.net";
	// private $dbusername = "sql12353920";
	// private $dbpassword = "1UmkdelB5l";
	// private $dbname = "sql12353920";
	

	protected function connect() {

		$dsn = 'mysql:host='. $this->servername . ';dbname=' . $this->dbname;
		try {
			$pdo = new PDO($dsn, $this->dbusername, $this->dbpassword);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			return $pdo;
		}
		catch(PDOException $e) {
  			echo "Connection failed: " . $e->getMessage();
		}
		
	}
	
}
