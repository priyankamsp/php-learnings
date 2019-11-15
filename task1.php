<?php
    $vowels = array("a","e","i","o","u");
    $words = "Best Website for Tamil Typing, Tamil Translation and English to Tamil Dictionar";
    $length = strlen($words);
    $count = 0;
    for($i=0;$i< $length; $i++) {
        $count = (in_array(strtolower($words{$i}),$vowels)) ? ($count + 1 ) : ($count + 0);
    }
    echo "There are {$count} vowels in given words";
?>

