<?php

	function sum_of_pos($arr)
	{
		$sum = 0;
		
		for($arr as $element)
		{
			if ($element > 0)
			{
				$sum += $element;
			}
				
		}
		
		return $sum;
	}

	/*
	1)
		function positive_sum($a) 
		{
		  	return array_sum(array_filter($a, function ($n) {return $n > 0;}));
		}

	2) function positive_sum($arr) 
		{
		  	return array_reduce($arr, function($c, $i){
			    if ($i > 0) 
			    {
			        $c += $i;
			    }
			    return $c;
			}, 0);
		}
	*/