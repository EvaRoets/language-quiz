<?php

class Word
{

    public string $frenchWord;
    public string $englishWord;

    function __construct(string $frenchWord, string $englishWord){
        $this->frenchWord = $frenchWord;
        $this->englishWord = $englishWord;

    }

    public function verify()
    {
        // use this function to verify if the provided answer by the user matches the correct one
        $totalCorrect = 0;
        if ($_POST("translation") == strtolower($this->englishWord)){
            $totalCorrect++;
            echo "<div id='results'>$totalCorrect</div>";
        } else {
            $totalCorrect--;
            echo "<div id='results'>$totalCorrect</div>";
        }
        // Bonus: allow answers with different casing (example: both bread or Bread can be correct answers, even though technically it's a different string)
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}







