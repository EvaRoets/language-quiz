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

//    public function run()
//    {
//        //check for option A and B
//        $submittedTranslation = isset($_POST["submit"]) && !empty($_POST["playerTranslation"]);
//        if (!$submittedTranslation) {
//            $this->randomWord = $this->generateRandomWord();
//        } else {
//            $this->checkTranslation();
//        }
//    }

    //option A: select a random word for the user to translate
    private function generateRandomWord()
    {
        $this->randomWord = $this->words[array_rand($this->words, 1)];
        $_SESSION["playerTranslation"] = serialize($this->randomWord);
    }

    //option B: user has just submitted an answer
    private function checkTranslation()
    {
        //call randomWord from session
        $this->randomWord = unserialize($_SESSION["playerTranslation"]);

        // verify the answer
        $playerTranslation = $_POST('playerTranslation');

        // generate a message for the user that can be shown
        //if verify() is true
        if ($this->randomWord->verify($playerTranslation) === true) {
            $this->message = "<div>Tres bien, your answer <b>" . $playerTranslation . "</b> is correct. </b></div>";
            //TODO add score
        } else {
            $this->message = "<div>!Dommage, your answer <b>" . $playerTranslation . "</b> is wrong. </b></div>";
            //TODO add score
        }
    }
}
