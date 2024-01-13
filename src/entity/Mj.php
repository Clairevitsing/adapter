<?php

namespace src\entity;

require_once "RandomGeneratorInterface.php";

class Mj
{
    protected array $randomObjects;

    public function __construct(RandomGeneratorInterface $random1,
                                RandomGeneratorInterface $random2,
                                RandomGeneratorInterface $random3)
    {
        $this->randomObjects = [$random1, $random2, $random3];
    }

    public function rollForCrit(int $critRate): array
    {
        $randomObject = $this->getRandomObject();
        $randomValue = $randomObject->generateRandom();
        $success = $randomValue > $critRate;
        return [
            'object' => get_class($randomObject),
            'value' => $randomValue,
            'success' => $success,

        ];
    }

    private function getRandomObject(): RandomGeneratorInterface
    {
        $randomIndex = array_rand($this->randomObjects);
        return $this->randomObjects[$randomIndex];
    }
}
