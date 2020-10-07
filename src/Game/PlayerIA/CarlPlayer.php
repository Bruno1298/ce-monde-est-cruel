<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class CarlPlayer
 * @package Hackathon\PlayerIA
 * @author YOUR NAME HERE
 */
class CarlPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Choice           ?    $this->result->getLastChoiceFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Choice ?    $this->result->getLastChoiceFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide) -- if 0 (first round)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide) -- if 0 (first round)
        // -------------------------------------    -----------------------------------------------------
        // How to get all the Choices          ?    $this->result->getChoicesFor($this->mySide)
        // How to get the opponent Last Choice ?    $this->result->getChoicesFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get my Last Score            ?    $this->result->getLastScoreFor($this->mySide)
        // How to get the opponent Last Score  ?    $this->result->getLastScoreFor($this->opponentSide)
        // -------------------------------------    -----------------------------------------------------
        // How to get the stats                ?    $this->result->getStats()
        // How to get the stats for me         ?    $this->result->getStatsFor($this->mySide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // How to get the stats for the oppo   ?    $this->result->getStatsFor($this->opponentSide)
        //          array('name' => value, 'score' => value, 'friend' => value, 'foe' => value
        // -------------------------------------    -----------------------------------------------------
        // How to get the number of round      ?    $this->result->getNbRound()
        // -------------------------------------    -----------------------------------------------------
        // How can i display the result of each round ? $this->prettyDisplay()
        // -------------------------------------    -----------------------------------------------------
        
        // $test = $this->result->getLastScoreFor($this->opponentSide);

        // foreach ($test as $result) {
        //     echo $result, PHP_EOL; 
        
        // } 

        $array = [
            "rock" => parent::paperChoice(),
            "scissors" => parent::rockChoice(),
            "paper" => parent::scissorsChoice(),
        ];

        $m_last_choice = $this->result->getLastChoiceFor($this->mySide);
        $m_last_score = $this->result->getLastChoiceFor($this->mySide);

        $last_score = $this->result->getLastScoreFor($this->opponentSide);
        $last_choice = $this->result->getLastChoiceFor($this->opponentSide);

        $my_choice = parent::paperChoice();
        

        if ($last_choice == 'rock') {
            $my_choice = parent::paperChoice();
        } elseif ($last_choice == 'scissors') {
            $my_choice = parent::rockChoice();
        } else {
            $my_choice = parent::scissorsChoice();
        }

        if ($last_score == 3) {
            $my_choice = $array[$m_last_choice];
        }

        if ($last_score == 1) {
            $my_choice = $array[$my_choice];
        }


        return $my_choice;
    }
};
