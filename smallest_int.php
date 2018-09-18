<?php

	echo smallest(array(1, 0, 56, 93, -3)) . "<br>";
	echo smallest(array(-5, 23, 14)) . "<br>";
	echo smallest(array('big', 5, 20, -1)) . "<br>";
	echo smallest(array(89)) . "<br>";
	
	function smallest($array)
	{
		if (is_int_array($array))
		{
			$small = $array[0];
			foreach ($array as $element)
			{
				if ($element < $small)
					$small = $element;
			}
			
			return $small;
		}
		
		return "Error: argument isn't an integer array";
	}
	
	function is_int_array($array)
	{
		if (is_array($array))
		{
			foreach ($array as $element)
			{
				if (!is_int($element))	
					return FALSE;
			}
			return TRUE;
		}
		else 
			return FALSE;
	}
	
	/*
	1)
		function smallestInteger ($arr) 
		{
    		return min($arr);
		}
	
	2)
		use function min as smallestInteger;

	3)
		function smallestInteger ($arr) 
		{
    		sort($arr, SORT_NUMERIC);
    		return $arr[0];
		}
	*/