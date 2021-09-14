<?php
echo PHP_VERSION; //8.0.10
echo 2**10; //1024

$x=1;
$y=10;
echo $x<=>$y;


$x=1;
$y=1.0;

echo gettype ($x); // intiger
echo gettype ($y); //double

if($x==$y) {
  echo "Równe";
}else{
    echo "Różne";
  }

if ($x===$y) {
  echo "identyczne";

}
{
echo "różne<hr>" ;
}


$x=10;
echo $x; //10
$x=++$x;
echo $x; //11
$y=$x++;
echo #x; //12
echo $y. '<hr>'//11

$x=1;
echo $x; //1
$x=$x++;
echo $x; // 1
$x=++$x;
echo $x; //2
$y=++$x;
echo $x; //3
echo $y; //3
$
$y=$x++
echo $x; // 4
echo $y;// 3

?>
