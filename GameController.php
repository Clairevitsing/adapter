<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use src\entity\Coin;
use src\entity\DeckRandomGeneratorAdapter;
use src\entity\Dice;
use src\entity\Mj;

class GameController extends AbstractController
{
    /**
     * @Route("/game", name="game")
     */
    public function index(): Response
    {
        $coin = new Coin();
        $deckAdapter = new DeckRandomGeneratorAdapter(4, 13);
        $dice = new Dice([1, 2, 3, 4, 5, 6]);


        $mj = new Mj($coin, $deckAdapter, $dice);

        $critRate = 4;

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

        return $this->render('game/index.html.twig', [
            'result' => $result,
        ]);
    }
}