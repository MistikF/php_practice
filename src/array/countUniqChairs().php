<?php

function countUniqChars($str)
{
    $chars = [];
    for ($i = 0; $i < strlen($str); $i++) {
        $chars[$str[$i]] = true;
    }
    return count($chars);
}

$text1 = 'yyab';
countUniqChars($text1); // 3

$text2 = 'You know nothing Jon Snow';
countUniqChars($text2); // 13

$text3 = '';
countUniqChars($text3); // 0
