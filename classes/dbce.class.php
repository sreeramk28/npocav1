<?php
/**
 * 
 */
class Dbce 
{
	//Development
	private $servername = "localhost";
	private $dbusername = "postgres";
	private $dbpassword = "lqSPg28!";
	private $dbname = "npocadb";

	//Production
	// private $servername = "sql12.freemysqlhosting.net";
	// private $dbusername = "sql12353920";
	// private $dbpassword = "1UmkdelB5l";
	// private $dbname = "sql12353920";
	

	protected function connect() {

		$dsn = 'pgsql:host='. $this->servername . ';port=5432;dbname=' . $this->dbname . ';user=' . $this->dbusername . ';password=' . $this->dbpassword;
		try {
			$pdo = new PDO($dsn);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
		catch(PDOException $e) {
  			echo "Connection failed: " . $e->getMessage();
  			exit();
		}
		
	}
	
}