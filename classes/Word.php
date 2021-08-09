<?php

class Word
{
    public string $frenchWord;
    public string $englishWord;
    public string $playerTranslation;
    public int $totalScore;

    function __construct(string $frenchWord, string $englishWord)
    {
        $this->frenchWord = $frenchWord;
        $this->englishWord = $englishWord;

    }

    public function verify()
    {
        // verify if the provided answer by the user matches the correct one
        // allow answers with different casing
        $this->playerTranslation = $_POST("translation");
        $this->totalScore = 0;

        if (strtolower($this->playerTranslation) == $this->englishWord) {
            $totalScore++;
            echo "<div id='results'>Tres bien! You're score is" . $totalCorrect"</div>";
        } else {
            $totalScore--;
            echo "<div id='results'>!Dommage, your answer is wrong. You're score is" . $totalCorrect"</div>";
        }
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}








