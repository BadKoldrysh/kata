<?php
function double(&$n)
{
  $n *= 2;
}

function halve(&$n)
{
  $n /= 2;
}

function enlarge(&$x, $n)
{
  $x *= $n;
}

/*
1)
	function double(&$n) 
	{
	  enlarge($n, 2);
	}
	function halve(&$n) 
	{
	  enlarge($n, 0.5);
	}
	function enlarge(&$x, $n) 
	{
	  $x = $x * $n;
	}
*/