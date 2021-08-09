<?php

class Word
{
    // TODO: add word (FR) and answer (EN) - (via constructor or not? why?)

    public string $frenchWord;
    public string $englishWord;

    function __construct(string $frenchWord, string $englishWord){
        $this->frenchWord = $frenchWord;
        $this->englishWord = $englishWord;

    }

    public function verify(string $answer)
    {
        // TODO: use this function to verify if the provided answer by the user matches the correct one
//        $this->answer = $_POST("translation");
//        $totalCorrect = 0;
//
//        if ("woord1 uit array " == strtolower($answer){
//                $totalCorrect++;
//            }
//        if ("woord2 uit array " == strtolower($_POST("translation")){
//                $totalCorrect++;
//            }
//        echo "<div id='results'>$totalCorrect</div>";


        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}


