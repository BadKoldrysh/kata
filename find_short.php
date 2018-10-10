<?php
function findShort($str)
{
  $arr = explode(' ', $str);
  $sh = strlen($arr[0]);
  foreach ($arr as $word)
  {
      if (strlen($word) < $sh)
          $sh = strlen($word);
  }
    
  return $sh;
}
/*
1) 
function findShort($str)
{
   return min(array_map('strlen', (explode(' ', $str))));
}

2)
function findShort($str)
{
    $str = explode(" ",$str);
  array_multisort(array_map('strlen', $str), $str);
    return strlen($str[0]);
}

3)
function findShort($str)
{
  $words = explode(" ", $str);
  usort($words, function($a, $b){ return strlen($a) <=> strlen($b); });
  
  return strlen(reset($words));
}
*/