<?php
$string = ["Hello", "World", "PHP", "Programming"];

function countVowels($string) {
    $vowelCount = 0;
    $vowels = "aeiouAEIOU";
    
    for ($i = 0; $i < strlen($string); $i++) {
        if (strpos($vowels, $string[$i]) !== false) {
            $vowelCount++;
        }
    }
    
    return $vowelCount;
}


foreach ($string as $value){
    echo "Original String: " . $value . ", Vowel Count: " . countVowels($value). ", Reversed String: " . strrev($value) . PHP_EOL;

}
