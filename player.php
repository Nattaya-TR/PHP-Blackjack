<?php
declare(strict_types=1);

require_once('Deck.php');
require_once('Blackjack.php');

class Player {
    private array $cards = [];
    private bool $lost = false;

    public function __construct(Deck $deck) {
        array_push($this->cards,$deck->drawCard(),$deck->drawCard());
    }

    public function hit(Deck $deck) {
        array_push($this->cards,$deck->drawCard());
            if($this->getScore() > 21) {
            return $this->lost = true;
        }
    }

    public function surrender() {
        $this->lost = true;
    }

    public function getScore() {
            $totalvalue = 0;
        foreach ($this->cards AS $card) {
            $totalvalue += $card->getValue();
        }
            return $totalvalue;
    }

    public function hasLost() {
        return $this->lost;
    }


}
