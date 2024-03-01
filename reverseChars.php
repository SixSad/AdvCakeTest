<?php
function revertCharacters(string $string): string {
    // Punctuation marks
    $punctuation = [',', '!', '.', '?', ';', '...', ':'];

    // Split the string into words
    $words = explode(' ', $string);

    // Process each word
    $reversedWords = array_map(function (string $word) use ($punctuation) {
        // Reverse word
        $reversed = strrev($word);

        // Check if the first character is punctuation
        $firstChar = mb_substr($reversed, 0, 1);
        if (in_array($firstChar, $punctuation)) {
            // If the first character is punctuation, remove it from the word
            $reversed = mb_substr($reversed, 1);
            // Add the punctuation to the end of the word
            $reversed .= $firstChar;
        }

        return $reversed;
    }, $words);

    // Join the words into a string
    return implode(' ', $reversedWords);
}
?>