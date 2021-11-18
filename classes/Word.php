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

    public function verify(string $playerTranslation): bool
    {
        // verify if the provided answer by the user matches the correct one
        // allow answers with different casing
        if (strtolower($playerTranslation) == $this->englishWord) {
            return true;
        } else {
            return false;
        }

        // return (strtolower($playerTranslation) == $this->englishWord);
        // Bonus (hard): can you allow answers with small typo's (max one character different)?
    }
}








