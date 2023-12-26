<?php

namespace src\entity;

require_once "RandomGeneratorInterface.php";
require_once "Deck.php";

class DeckRandomGeneratorAdapter implements RandomGeneratorInterface
{
    private Deck $deck;

    public function __construct(int $colors, int $values)
    {
        $this->deck = new Deck($colors, $values);
    }

    public function generateRandom() : int
    {
        $card = $this->deck->flip();
        echo "Generated value: $card\n";
        return (int) $card;
    }
}