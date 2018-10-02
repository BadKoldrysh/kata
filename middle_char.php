<?php
/*

You are going to be given a word. Your job is to return the middle character of the word. If the word's length is odd, return the middle character. If the word's length is even, return the middle 2 characters.

#Examples:

Kata.getMiddle("test") should return "es"

Kata.getMiddle("testing") should return "t"

Kata.getMiddle("middle") should return "dd"

Kata.getMiddle("A") should return "A"

*/

function getMiddle($word) 
{
    $l = strlen($word);
    return $l % 2 == 0 ? substr($word, $l/2 - 1, 2) : substr($word, ((int) $l/2), 1);
}  

/*
1)
function getMiddle($text) {
  $len = strlen($text);
  if ($len % 2 === 0) {
    return substr($text, $len / 2 - 1, 2);
  }
  return substr($text, $len / 2, 1);
}

2)
function getMiddle($text) {
  $start = floor((strlen($text) - 1) / 2);
  $len = strlen($text) % 2 ? 1 : 2;
  return substr($text, $start, $len);
  
}

3)
function getMiddle($text) {
  return implode("",array_slice(str_split($text), round(strlen($text)/2)-1,strlen($text)%2 ? 1 : 2 )); 
}

*/