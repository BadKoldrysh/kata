<?php
/*
Given an array of integers.

Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers.

If the input array is empty or null, return an empty array.

Example
For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].
*/

function pos_count_neg_sum($arr)
{
    if (empty($arr) || is_null($arr)) 
      return array();
  
    $res = array(0, 0);
    
    foreach ($arr as $el)
    {
        if ($el > 0)
            $res[0]++;
        else if ($el < 0)
            $res[1] += $el;
    }
     
    return $res;
}

/*
1)
function countPositivesSumNegatives($input) {
    if (empty($input)) {
      return [];
    }
    
    $pos = $neg = 0;
    foreach ($input as $value) {
      if ($value > 0) {
        $pos += 1;
      } else {
        $neg += $value;
      }
    }
    
    return [$pos, $neg];
}

2)
function countPositivesSumNegatives($input) {

  if (empty($input)) return [];

  $positive = 0;
  $negative = 0;
  foreach($input as $number) {
    $number > 0 ? $positive++ : $negative += $number;
  }
  
  return [$positive, $negative];
}

3)
function countPositivesSumNegatives($input) {
    if($input == []) return [];
    $res = [0, 0];
    foreach($input as $v){
      $v>0 ? $res[0] += 1 : $res[1] += $v;
    }
    return $res;
}
*/