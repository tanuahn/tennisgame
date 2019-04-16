<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 12/04/19
 * Time: 11:33
 */

class TennisGameTest
{
    public $score = "";
    public $player1Name;
    public $player1Score;
    public $player2Name;
    public $player2Score;

    const LOVE = '0';
    const FIFTEEN = '1';
    const THIRTY = '2';
    const FORTY = '3';

    public function getPlayer1Name()
    {
        return $this->player1Name;
    }

    public function setPlayer1Name($player1Name)
    {
        $this->player1Name = $player1Name;
    }

    public function getPlayer2Name()
    {
        return $this->player2Name;
    }

    public function setPlayer2Name($player2Name)
    {
        $this->player2Name = $player2Name;
    }

    public function getPlayer1Score()
    {
        return $this->player1Score;
    }

    public function setPlayer1Score($player1Score)
    {
        $this->player1Score = $player1Score;
    }

    public function getPlayer2Score()
    {
        return $this->player2Score;
    }

    public function setPlayer2Score($player2Score)
    {
        $this->player2Score = $player2Score;
    }

    public function getDeuce($player1Score)
    {
            switch ($player1Score)
            {
                case self::LOVE:
                    $this->score = "Love-All";
                    break;
                case self::FIFTEEN:
                    $this->score = "Fifteen-All";
                    break;
                case self::THIRTY:
                    $this->score = "Thirty-All";
                    break;
                case self::FORTY:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;

            }
    }

    public function getWin($player1Score, $player1Name, $player2Score, $player2Name)
    {
            $minusResult = $player1Score-$player2Score;
            if ($minusResult==1) $this->score ="Advantage for $player1Name";
            else if ($minusResult ==-1) $this->score ="Advantage for $player2Name";
            else if ($minusResult>=2) $this->score = "Win for $player1Name";
            else $this->score ="Win for $player2Name";

    }

    public function getScore($player1Score, $player2Score)
    {
        switch ($player1Score)
        {
            case self::LOVE:
                $this->player1Score = "Love";
                break;
            case self::FIFTEEN:
                $this->player1Score = "Fifteen";
                break;
            case self::THIRTY:
                $this->player1Score = "Thirty";
                break;
            case self::FORTY:
                $this->player1Score = "Fourty";
                break;
        }

        switch ($player2Score)
        {
            case self::LOVE:
                $this->player2Score = "Love";
                break;
            case self::FIFTEEN:
                $this->player2Score = "Fifteen";
                break;
            case self::THIRTY:
                $this->player2Score = "Thirty";
                break;
            case self::FORTY:
                $this->player2Score = "Fourty";
                break;
        }

        return $this->score = "$this->player1Score - $this->player2Score";
    }

    public function __toString()
    {
        return $this->score;
    }
}