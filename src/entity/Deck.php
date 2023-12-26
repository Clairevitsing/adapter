<?php

namespace src\entity;


class Deck
{
    protected int $colors;
    protected int $values;

    public function __construct(int $colors, int $values)
    {
        $this->colors = $colors;
        $this->values = $values;
    }
    public function flip() : array
    {
            return [
                'suit' => ['spades', 'hearts', 'diamonds', 'clubs'][array_rand(['spades', 'hearts', 'diamonds', 'clubs'])],
                'value' => rand(1, $this->values),
            ];
    }


}