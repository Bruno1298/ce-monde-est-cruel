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



        $last_choice = $this->result->getLastChoiceFor($this->mySide);

        if ($last_choice == 'rock') {
            return parent::paperChoice();
        } elseif ($last_choice == 'scissors') {
            return parent::rockChoice();
        } else {
            return parent::scissorsChoice();
        }

        return parent::rockChoice();

    }
};
