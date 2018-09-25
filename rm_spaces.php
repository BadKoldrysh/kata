<?php
	
	function rm_spaces(string $s): string 
	{
	  $arr = explode(" ", $s);
	  return implode($arr);
	}
	/*
		1)
		function no_space(string $s): string 
		{
 			return str_replace(' ', '', $s);
		}
	*/