<?php
	echo del_first_last_char("ab") . "<br>";
	echo del_first_last_char("a") . "<br>";
	echo del_first_last_char("abcd") . "<br>";
	echo del_first_last_char("\$Company of Heroes%") . "<br>";
	

	function del_first_last_char($str)
	{
		if (is_string($str))
		{
			if (strlen($str) > 1)
			{
				return substr($str, 1, strlen($str)-2);
			}
			else
			{
				echo "Error: length of this strong is less than 2";
			}
		}
		else
		{
			echo "Error: argument is not a string";
		}
	}

	/*
		1)
			function remove_char(string $s): string 
			{
  				return substr($s, 1, -1);
			}
		

	*/