<?php

/**
 * StatsShell is the oject holding and manipulating 
 * Statics that are parsed from the HTML file
 *
 * @author Kyle Dosch
 */
class StatsShell {
    
    public $playerId = 0;
    public $playerName = '';
    public $playerTeam = '';
    public $playerRebounds = 0;
    public $playerAsts = 0;
    public $playerSteals = 0;
    public $playerBlocks = 0;
    public $playerTurnOvers = 0;
    public $playerPoints = 0;
    public $PlayerValue = 0;
    
    public function fillVars($pId,$pName,$pTeam,$pRbd,$pAst,$pStl,$pBlk,$pTO,$pPts,$score){
      
        $this->playerId = $pId;
        $this->playerAsts = $pAst;
        $this->playerBlocks = $pBlk;
        $this->playerName = $pName;
        $this->playerTeam = $pTeam;
        $this->playerRebounds = $pRbd;
        $this->playerSteals = $pStl;
        $this->playerPoints = $pPts;
        $this->playerTurnOvers = $pTO;
        
        $this->PlayerValue = $this->calcPlayerValue();
    }
    
    //Player Value Determined on weights associated with different stats they average
    //Code redudancy below case of partial documentation on weights
    public function calcPlayerValue(){
        
        //Points weight = 1x
        $score = $this->playerPoints;
        //Assists weight = 1.5x
        $score = $score + ($this->playerAsts * 1.5);
        //Blocks weight = 2x
        $score = $score + ($this->playerBlocks * 2);
        //Steals weight = 2x
        $score = $score + ($this->playerSteals * 2);
        //Rebounds weight = 1.2x
        $score = $score + ($this->playerRebounds * 1.2);
        //Turn Overs weight = -1x
        $score = $score - $this->playerTurnOvers;
        
        return $score;
    }
            
}
