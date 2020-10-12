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
	private $servername = $dburl["host"];
	private $portnum = $dburl["port"];
	private $dbusername = $dburl["user"];
	private $dbpassword = $dburl["pass"];
	private $dbname = ltrim($dburl["path"], "/");
	

	protected function connect() {
		$dsn = 'pgsql:' . sprintf(
    		"host=%s;port=%s;user=%s;password=%s;dbname=%s",
    		$this->servername,
    		$this->portnum,
    		$this->dbusername,
    		$this->dbpassword,
    		$this->dbname
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