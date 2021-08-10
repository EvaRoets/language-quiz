<?php

class LanguageGame
{
    private array $words = [];
    public string $message = "";
    public Word $randomWord;
//    public int $totalScore = 0;

    public function __construct()
    {
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // create instances of the Word class to be added to the words array
            $word = new Word($frenchTranslation, $englishTranslation);
            array_push($this->words, $word);
        }
    }

    public function run()
    {
        //check for option A and B
        $submittedTranslation = isset($_POST["submit"]) && !empty($_POST["playerTranslation"]);
        if (!$submittedTranslation) {
            $this->generateWord();
        } else {
            $this->checkTranslation();
        }
    }

    //option A: select a random word for the user to translate
    public function generateWord()
    {
        $this->randomWord = $this->words[array_rand($this->words, 1)];
        // var_dump($this->words);
        // store randomWord in session
        $_SESSION["playerTranslation"] = serialize($this->randomWord);
        var_dump($_SESSION["playerTranslation"]);
    }

    //option B: user has just submitted an answer
    public function checkTranslation()
    {
        //call randomWord from session
        $this->randomWord = unserialize($_SESSION["playerTranslation"]);

        // verify the answer
        $playerTranslation = $_POST("playerTranslation");

        // generate a message for the user that can be shown
        //if verify() is true
        if ($this->randomWord->verify($playerTranslation) === true) {
            $this->message = "<div>Tres bien, your answer <b>" . $playerTranslation . "</b> is correct. </b></b>Your score is" . $totalScore . "</div>";
            //TODO add score
        } else {
            $this->message = "<div>!Dommage, your answer <b>" . $playerTranslation . "</b> is wrong. </b></b>Your score is" . $totalScore . "</div>";
            //TODO add score
        }
    }
}
