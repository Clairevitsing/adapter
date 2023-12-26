<?php

namespace src\entity;

require_once "RandomGeneratorInterface.php";
class Dice implements RandomGeneratorInterface
{
   protected array $nbFaces;
    public function __construct(array $nbFaces)
    {
          $this ->nbFaces = $nbFaces;
    }

      public function generateRandom() : int
      {
          return $this->nbFaces[array_rand($this->nbFaces)];
      }

}