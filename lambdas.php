<?hh

$foo = $x ==> $x + 1;
$foo(12); // returns 13

$foo = () ==> 73;
$foo(); // returns 73

$bar = ($x,$y) ==> $x + $y;
$bar(3,8); // returns 11

//type hints (not supported yet by the typechecker, gives an error)
$captured = "test: ";
//$bar = (string $k = "foo"): string ==> $captured . $k;

