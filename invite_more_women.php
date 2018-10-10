<?php
function invite_more_women(array $arr): bool 
{
  $persons = 0;
  foreach ($arr as $person)
    $persons += $person;
  return $persons > 0 ? (bool)true : (bool)false;
} 

/*
1)
function invite_more_women(array $a): bool 
{
  return (array_sum($a) > 0);
}

2)
function invite_more_women(array $a): bool 
{
  return count(array_filter($a, function ($p) {return $p === 1;})) > count(array_filter($a, function ($p) {return $p === -1;}));
}

3)
function invite_more_women(array $a) : bool
{
    if (array_sum($a) < 1) return false;
    return true;
}
*/