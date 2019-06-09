<?php
include_once "Point.php";
include_once "MoveablePoint.php";


//$poit = new Point(34,34);
//echo $poit->getX();
//$poit->getXY();
//echo $poit->toString();

$move1 = new MoveablePoint(10, 10, 20, 20);
echo "<br>";
print_r($move1->getSpeed());
echo "<br>".$move1->toString();
print_r($move1->move());
print_r($move1->arr);