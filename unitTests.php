<?php
// Include your function
require_once 'revertCharacters.php';

// Function to run unit tests
function runTests() {
    $testCases = [
        // Expected result: "тевирп. - как алед?"
        [
            'input' => "привет. - как дела?",
            'expected' => "тевирп. - как алед?"
        ],
        // Expected result: "тевирп. !торго"
        [
            'input' => "привет. !огрот",
            'expected' => "тевирп. !торго"
        ],
        // Expected result: "привет! давай-ка. проверим!"
        [
            'input' => "тевирп! - кяиав-дл .милеорвкеп!",
            'expected' => "привет! давай-ка. проверим!"
        ],
        // Expected result: "тевирп. теперь - ты?"
        [
            'input' => "привет. ревеп - ыт?",
            'expected' => "тевирп. теперь - ты?"
        ],
    ];

    foreach ($testCases as $i => $testCase) {
        $input = $testCase['input'];
        $expected = $testCase['expected'];

        $result = revertCharacters($input);

        echo "Test case " . ($i + 1) . ": ";
        if ($result === $expected) {
            echo "Passed\n";
        } else {
            echo "Failed\n";
            echo "Input: $input\n";
            echo "Expected: $expected\n";
            echo "Got: $result\n";
        }
    }
}

// Run unit tests
runTests();
?>