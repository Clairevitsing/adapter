<?php

namespace src\entity;

require_once "RandomGeneratorInterface.php";

class Coin implements RandomGeneratorInterface
{
    public function toss() : bool
    {
        return (bool) $this->generateRandom();
    }

    public function generateRandom() : int
    {
        return rand(0,1);
    }

    public function roll(): int
    {
        return $this->generateRandom();
    }
}
