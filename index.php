<?php
$strings = ["Hello", "World", "PHP", "Programming"];
function countVowels($string) {
    $vowels = "aeiouAEIOU";
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (strpos($vowels, $string[$i]) !== false) {
            $count++;
        }
    }
    
    return $count;
}
foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);
    echo "Original String: $string\n";
    echo "Reversed String: $reversedString\n";
    echo "Number of Vowels: $vowelCount\n";
    echo "----------------------------\n";
}