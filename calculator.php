<html>
<head>
<title>Calculator</title>
</head>
<body>
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
$op = $_GET["op"];
$x = $_GET["x"];
$y = $_GET["y"];

if ($op==sum)
{
echo $calculator->sum($x, $y);
}

if ($op==sub)
{
echo $calculator->sub($x, $y);
}

if ($op==multi)
{
echo $calculator->multi($x, $y);

}
if ($op==divi)
{
echo $calculator->divi($x, $y);
}



?>
</body>
</html>
