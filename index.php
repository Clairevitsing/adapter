<?php

// On inclut les fichiers contenant les définitions des classes
require_once 'vendor/autoload.php';
require_once 'src\Entity\Mj.php';
require_once 'src\Entity\Deck.php';
require_once 'src\Entity\Coin.php';
require_once 'src\Entity\Dice.php';
require_once 'src\Entity\DeckRandomGeneratorAdapter.php';
require_once 'src\Entity\RandomGeneratorInterface.php';

use Src\Entity\Coin;
use Src\Entity\Deck;
use Src\Entity\Dice;
use Src\Entity\Mj;


$coin = new Coin();
$deck = new Deck(4,13);
$dice = new Dice([1, 2, 3,4,5,6]);

$deckAdapter = new \src\entity\DeckRandomGeneratorAdapter(4,13);
$mj = new Mj($coin, $deckAdapter, $dice);

$critRate = 8;

$result = $mj->rollForCrit($critRate);

var_dump($result);

if (is_array($result)) {
    echo "The game master used an item " . $result['object'] . " and achieved a score of " . $result['value'] . "\n";

    if ($result['success']) {
        echo "The score is above the criteria, it's a success!\n";
    } else {
        echo "The score is below the criteria, it's a failure!\n";
    }
} else {
    echo "Unexpected result type: " . gettype($result) . "\n";
    var_dump($result);
}

