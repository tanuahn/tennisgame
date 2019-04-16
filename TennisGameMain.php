<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:29 PM
 */

include ('TennisGameTest.php');

//$tennisGame = new TennisGame();
//
//$tennisGame->getScore('TA', 'BA', 2, 0);
//
//echo $tennisGame;

$tennisGameTest = new TennisGameTest();
$tennisGameTest->setPlayer1Name("Tuan Anh");
$tennisGameTest->setPlayer2Name("Tu Anh");
$tennisGameTest->setPlayer1Score("4");
$tennisGameTest->setPlayer2Score("6");
$player1Score = $tennisGameTest->getPlayer1Score();
$player2Score = $tennisGameTest->getPlayer2Score();
$player1Name = $tennisGameTest->getPlayer1Name();
$player2Name = $tennisGameTest->getPlayer2Name();

if ($player1Score == $player2Score)
{
    $tennisGameTest->getDeuce($player1Score);
}
else if ($player1Score>=4 || $player2Score>=4)
{
    $tennisGameTest->getWin($player1Score, $player1Name, $player2Score, $player2Name);
}
else
{
    $tennisGameTest->getScore($player1Score, $player2Score);
}

echo $tennisGameTest;