<?php
class calculator{

public function sum($x, $y) {
	return $x + $y;
}
public function sub($x, $y) {
	return $x - $y;
}
public function multi($x, $y) {
	return $x * $y;
}
public function divi($x, $y) {
	return $x / $y;
}

}

$calculator = new Calculator();
echo $calculator->sum(5, 7);
print "\n";
echo $calculator->sub(8, 2);
print"\n";
echo $calculator->multi(2, 5);
print "\n";
echo $calculator->divi(20, 4);
?>
