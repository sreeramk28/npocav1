<?php
/**
 * 
 */
class Dbce 
{
	
	private $dburl;
	private $servername;
	private $portnum;
	private $dbusername;
	private $dbpassword;
	private $dbname;
	
	protected function setDevCred() {
		$this->servername = "localhost";
		$this->portnum = "5432";
		$this->dbusername = "postgres";
		$this->dbpassword = "lqSPg28!";
		$this->dbname = "npocadb"; 
	}
	protected function setProdCred() {
		$this->dburl = parse_url(getenv("DATABASE_URL"));
		$this->servername = $this->dburl["host"];
		$this->portnum = $this->dburl["port"]; 
		$this->dbusername = $this->dburl["user"];
		$this->dbpassword = $this->dburl["pass"];
		$this->dbname = ltrim($this->dburl["path"], "/");
	}
	protected function connect() {
		//$this->setDevCred();
		$this->setProdCred();
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