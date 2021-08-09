<?php

class LanguageGame
{
    private array $words;
    public string $answer;
    public Word $randomWord;

    public function __construct()
    {
        foreach (Data::words() as $frenchTranslation => $englishTranslation) {
            // TODO: create instances of the Word class to be added to the words array
           $word = new Word($frenchTranslation, $englishTranslation);
           $this->words = [];
           array_push($this->words, $word);
            //var_dump($word);

        }
    }

    public function run()
    {
        // TODO: check for option A or B

        // Option A: user visits site first time (or wants a new word)
        // TODO: select a random word for the user to translate
            $this->randomWord = $this->words[array_rand($this->words, 1)];
            $_SESSION["randomWord"] = $this->randomWord;


        // Option B: user has just submitted an answer
        // TODO: verify the answer (use the verify function in the word class) - you'll need to get the used word from the array first
        // TODO: generate a message for the user that can be shown

    }
}
