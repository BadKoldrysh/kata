<?php
	echo basicOp("+", 5, 6) . "<br>";
	echo basicOp("-", 4, 8) . "<br>";
	echo basicOp("*", 3, 7) . "<br>"; 
	echo basicOp("/", 64, 8) . "<br>";
	
	function basicOp($operation, $val1, $val2)
	{
		if (is_string($operation) && is_int($val1) && is_int($val2))
		{
			if ($operation == "+" || $operation == "-" || $operation == "*" || $operation == "/")
			{
				switch ($operation)
				{
						case "+":
							return $val1 + $val2;
						case "-":
							return $val1 - $val2;
						case "*":
							return $val1 * $val2;
						case "/":
							return $val1 / $val2;
						default:
							return "error";
				}
			}
			else
			{
				return "Error: $operation has bad value";
			}
		}
		else
		{
			return "Error: type of arguments is bad";
		}
	}

	/*
1)
function basicOp($op, $val1, $val2)
{
  // this makes me feel dirty, but it gets the job done
  return eval("return {$val1}{$op}{$val2};");
}

2)
interface BinaryOperator {
  public function perform($value1, $value2);
}

class AdditionOperator implements BinaryOperator {
  public function perform($value1, $value2) {
    return $value1 + $value2;
  }
}

class SubtractionOperator implements BinaryOperator {
  public function perform($value1, $value2) {
    return $value1 - $value2;
  }
}

class MultiplicationOperator implements BinaryOperator {
  public function perform($value1, $value2) {
    return $value1 * $value2;
  }
}

class DivisionOperator implements BinaryOperator {
  public function perform($value1, $value2) {
    return $value1 / $value2;
  }
}

function get_operator($op)
{
  switch ($op)
  {
    case '+': return new AdditionOperator();
    case '-': return new SubtractionOperator();
    case '*': return new MultiplicationOperator();
    case '/': return new DivisionOperator();
  }
}

function basicOp($op, $val1, $val2)
{
  $operator = get_operator($op);
  return $operator->perform($val1, $val2);
}

3)
function basicOp($op, $val1, $val2)
{
  if(in_array($op, array('+', '-', '*', '/')) && is_numeric($val1) && is_numeric($val2)) {
    switch($op) {
      case '+': return $val1 + $val2;
      case '-': return $val1 - $val2;
      case '*': return $val1 * $val2;
      case '/': return $val1 / $val2;
    }
  } else {
    return "Invalid input. Only numbers and arithmentic operators allowed.";
  }
}
	*/