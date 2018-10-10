<?php
function circle_of_numbers(int $n, int $first_number): int 
{
  $value = $first_number + $n/2;
  return $value < $n ? $value : $value - $n;
}


/*
1)
function circle_of_numbers(int $n, int $first_number): int {
   return ($first_number+($n/2)) % $n;
}
*/