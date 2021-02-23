<?php
declare(strict_types=1);

require_once("player.php");

class Dealer extends Player
{

    public function dealerHit(Deck $deck)
    {
        do {
            parent::hit($deck);
        } while($this->getScore() <= 15);

    }
}