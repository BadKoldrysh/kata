<?php
	
	
	function repeat_str($str, $n)
	{
		$result = "";
		for ($i = 0; $i < $n; $i++)
		{
			$result = $result . $str;
		}
		
		return $result;
	}
	
	function repeat_str_2($str, $n)
	{
		return str_repeat($str, $n);
	}