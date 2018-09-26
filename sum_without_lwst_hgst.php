<?php
$arr = array(7, 5, 1, 0, 9, 2);

echo sumArray($arr);

function sumArray($array) 
{
  sort($array);
  
  $sum = 0;
  for ($i = 1; $i < count($array)-1; $i++)
  {
      $sum += $array[$i];
  }
  
  return $sum;
}

/*
1)
	function sumArray($a) 
	{
  		return array_sum($a) - max($a) - min($a);
	}

2) 
function sumArray($array) 
{
	if(count($array) < 3)
		return 0;
		
	asort($array);
	return array_sum(array_slice($array,1,-1));
}

3) 
function sumArray($array) 
{
  	sort($array);
  	array_pop($array);
  	array_shift($array);
	return array_sum($array);
}