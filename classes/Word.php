<?php

class Word
{

    public string $frenchWord;
    public string $englishWord;

    function __construct(string $frenchWord, string $englishWord)
    {
        $this->frenchWord = $frenchWord;
        $this->englishWord = $englishWord;

    }

    public function verify()
    {
        // verify if the provided answer by the user matches the correct one
        // allow answers with different casing

        $totalCorrect = 0;
        if (strtolower($_POST("translation")) == $this->englishWord) {
            $totalCorrect++;
            echo "<div id='results'>$totalCorrect</div>";
        } else {
            $totalCorrect--;
            echo "<div id='results'>$totalCorrect</div>";
        }
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}

//->verify();







