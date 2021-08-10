<?php

class Player
{
    // add name and score
    public string $name;
    public int $score;

    public function __construct($name, $score)
    {
        // add 👤 automatically to their name
        $this->name = "👤" . $name;
        $this->score = $score;
    }

}
$score = "";
$player = new Player($name, $score);
