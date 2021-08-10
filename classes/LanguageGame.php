<?php

class LanguageGame
{
    private array $words = [];
    public string $message = "";
    public Word $randomWord;
    public int $totalScore = 0;

    public function __construct()
    {
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // create instances of the Word class to be added to the words array
            $word = new Word($frenchTranslation, $englishTranslation);
            array_push($this->words, $word);
            //var_dump($word);
        }
    }

    public function run()
    {
        // Option A: select a random word for the user to translate
        $this->randomWord = $this->words[array_rand($this->words, 1)];
//        var_dump($this->words);
        $_SESSION["randomWord"] = $this->randomWord;

        // Option B: user has just submitted an answer
        // verify the answer
        // generate a message for the user that can be shown

        $playerTranslation = $_POST("translation");

        //if verify() is true
        if ($this->randomWord->verify($playerTranslation) === true) {
            $this->message = "<div>Tres bien, your answer <b>{$playerTranslation}</b> is correct. </b></b>Your score is" . $totalScore . "</div>";
            //TODO add score
        } else { // if verify is false (words don't match)
            $this->message = "<div>!Dommage, your answer <b>{$playerTranslation}</b> is wrong. </b></b>Your score is" . $totalScore . "</div>";
            //TODO add score
        }

    }
}
