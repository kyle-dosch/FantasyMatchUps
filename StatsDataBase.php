<?php

/**
 * Description of StatsDataBase:
 * Project that parses a given HTML file which contains a table of stats 
 * on basketball players and basketball teams. 
 * 
 * Allows me to save stats in a mySQL database and query and compare different players
 * matched up against different teams.
 * 
 * Helps determine favorable matchups for daily fantasy sports sites.
 *
 * @author Kyle Dosch
 */
class StatsDataBase {
    
    protected $statsDBName = "myStatsDB";
    public $conn = null;
    protected $serverName = '';
    protected $userName = '';
    protected $password = '';
    protected $dbNew = true;
    
    protected function makeConn(){
        
        //Makes connection with server or with server and database (If database has already been creaed)
        if($this->dbNew == true){
            $this->conn = new mysqli($this->serverName,$this->userName,$this->password);
            if ($this->conn->connect_error){
                die("Connection failed: ".$this->conn->connect_error);
            }
        }else{
            $this->conn = new mysqli($this->serverName,$this->userName,$this->password,$this->statsDBName);
            if ($this->conn->connect_error){
                die("Connection failed w/ existing DB: ".$this->conn->connect_error);
            }
        }    
    }
    
    protected function makeDataBase(){
        
       $this->makeConn();
        
       statsDB = "CREATE DB ".$this->statsDBName;
       if ($this->conn->query($statsDB) !== TRUE){
           echo "Error creating database with connection";
       }
       
       $this->dbNew = false;
       $this->makeConn();
        
       $this->makeTables();
    }
    
    protected function makeTables(){
        
        //If table already exists in the database then code is skipped
        if (conn->query("SHOW TABLES LIKE 'Players'")->num_rows==0){
           $PlyrsTbl = "CREATE TABLE Players(
                pID INT IDENTITY(1,1) PRIMARY KEY,
                rank INT(6) PRIMARY KEY,
                name VARCHAR(40) NOT NULL,
                position VARCHAR(10),
                team VARCHAR(6),
                score DECIMAL(4,2),
                points DECIMAL(4,2),
                rebounds DECIMAL(4,2),
                assists DECIMAL(4,2),
                blocks DECIMAL(4,2),
                steals DECIMAL(4,2),
                )"; 
        } 
    }
    
    public function DBLife($server,$user,$pass){
        $this->serverName = $server;
        $this->userName = $user;
        $this->password = $pass;
        
        $this->makeDataBase();
        
        $this->DBshutDown();
    }
    
    public makeDBConn(){
      $this->conn = new mysqli($this->serverName,$this->userName,$this->password,$this->statsDBName);
      
      if ($this->conn->connect_error){
        die("Connection failed w/ existing DB: ".$this->conn->connect_error);
      }
    }
    
    protected function DBshutDown(){
        $this->conn.close();
    }
}
