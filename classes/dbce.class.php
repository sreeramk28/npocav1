<?php
/**
 * 
 */
class Dbce 
{
	/* ************ Development ************** */

	/*private $servername = "localhost";
	private $portnum = "5432";
	private $dbusername = "postgres";
	private $dbpassword = "lqSPg28!";
	private $dbname = "npocadb";*/

	/* ************Production **very crucial** ************** */
	
	private $dburl = parse_url(getenv("DATABASE_URL"));
    
	protected function connect() {
		
		$dsn = 'pgsql:' . sprintf(
    		"host=%s;port=%s;user=%s;password=%s;dbname=%s",
    		$this->dburl["host"],
    		$this->dburl["port"],
    		$this->dburl["user"],
    		$this->dburl["pass"],
    		ltrim($this->dburl["path"], "/")
		);
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