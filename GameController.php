<?php

//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
//use entity\Coin;
//use entity\Deck;
//use entity\Dice;
//use entity\Mj;


class GameController extends AbstractController
{
    public function index(): Response
    {
        $coin = new Coin();
        $deck = new Deck(4,13);
        $dice = new Dice(6);

        $deckAdapter = new \src\entity\DeckRandomGeneratorAdapter($deck);
        $mj = new Mj($coin, $deckAdapter, $dice);

        $critRate = 4;

        $result = $mj->rollForCrit($critRate);

        dump($result);

        //return $this->render('game/index.html.twig', [
          //  'result' => $result,
        //]);
    }
}