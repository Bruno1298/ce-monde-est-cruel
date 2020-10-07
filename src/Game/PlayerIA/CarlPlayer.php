<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class CarlPlayer
 * @package Hackathon\PlayerIA
 * @author Bruno ZHENG
 * J'ai essayer de prédire les autres avec 2-3 coups d'avances. C'étais difficiles.
 */
class CarlPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
    

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

        $nb_turn = $this->result->getNbRound();
        

        if ($last_choice == 'rock') {
            $my_choice = parent::paperChoice();
        } elseif ($last_choice == 'scissors') {
            $my_choice = parent::rockChoice();
        } else {
            $my_choice = parent::scissorsChoice();
        }

        if ($m_last_score == 3) {
            $my_choice = $array[$my_choice];
        }

        if ($last_score == 1) {
            $my_choice = $array[$m_last_choice];
            $my_choice = $array[$my_choice];
        }


        return $my_choice;
    }
};
