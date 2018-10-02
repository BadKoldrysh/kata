<?php
/*
the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false.
*/
function boolToWord($bool)
{
	return $bool ? "Yes" : "No";
}

/*
1)
function boolToWord(bool $b): string {
  return $b ? 'Yes' : 'No';
}

2)
function boolToWord(bool $bool){
if($bool) {
  return 'Yes';
} else {
  return 'No';
}

return $bool;
}
*/