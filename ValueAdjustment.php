
<?php

class ValueAdjustment(){

  protected $players = array();
  protected $teams = array();
  protected $playerVals = array();
  protected $SQLplayers = '';
  protected $SQLteam = '';
  protected $OffTeam = '';
  protected $DefTeam = '';
  protected $playerValsTbl = array();
  
  public function fillArrays($db,$Oteam,$Dteam){
    
    $this->SQLplayers = "SELECT * FROM Players WHERE team = ".$this->OffTeam;
    $this->SQLteam = "SELECT * FROM Teams WHERE name = ".$this->DefTeam;
    
    $db->makeDBConn;
    
    $stats = $db->conn->query($this->SQLteam);
    if ($stats->num_rows > 0){
      while($row = $result->fetch_assoc()){
        //insert team values into Teamarray
      }
    }
    
    
    $stats = $db->conn->query($this->SQLplayers);
    if ($stats->num_rows > 0){
      while($row = $result->fetch_assoc()){
        //insert values into players array
        $this->calcValues();
        $this->playerValsTbl->push($this->playerVals);
      }
    }
   
   $this->intoHTMLTable();
   
    $db->DBshutDown;
  
  protected function calcValues(){
    
    //Calc values for one player and insert into player values array 
    /**
     * ------WEIGHTS SCALE-------
     * --Defensive Rank per cat-- * --Players avg for cat-- = weight
     * 
     *      (1)-(-3.2)           *        pAvg        =      Players new value = weight +- pAvg
     *      (2)-(-3.0)
     *      (3)-(-2.8)
     *       .
     *       .
     *      (15)-(-0.2)
     *      (16)-(+0.2)
     *       .
     *       .
     *      (30)-(+2.8)
     *      (31)-(+3.0)
     *      (32)-(+3.2)
    */
     
     $this->players
    
  }   
    
    
  protected function intoHTMLTable(){
    
    //publish results of players vals table
    
  }  
}

?>
