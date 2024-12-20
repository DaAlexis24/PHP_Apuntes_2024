<?
// $pi = 3.1416;
// echo $pi . "\n";
// $mod = 5 % 2.5;
// echo $mod;

// $mod = fmod(5,2.5);
// echo $mod . "\n";
// $mod_dec = fmod(17, 3.1);
// echo $mod_dec;

// $num1 = 2.6;
// $num2 = 2.2;
// $num3 = - 2.6;
// $num4 = - 2.2;
// echo "Si redondeamos $num1 nos da: ".round($num1) . "\n";
// echo "Si redondeamos $num2 nos da: ".round($num2) . "\n";
// echo "Si redondeamos $num3 nos da: ".round($num3) . "\n";
// echo "Si redondeamos $num4 nos da: ".round($num4) . "\n";

// $num = 2.64567;
// $n = 2;
// echo "Si redondeamos $num a $n decimales, nos da: " . round($num,$n) . "\n";
// $num = 246;
// $n = -2;
// echo "Si redondeamos $num a $n centenas, nos da: " . round($num,$n) . "\n";

// $x = 3;
// $y = 5;
// echo "Si elevamos $x a la $y nos da: " . pow($x,$y);

// $num = 12345678901.234;
// $dec = 2;
// $sep_dec = '.A.';
// $sep_udMil = ".B.";

// echo "Vamos a formatear $num con las siguientes parámetros, esto nos da: ".number_format($num, $dec, $sep_dec, $sep_udMil);
// // Vamos a formatear 12345678901.234 con las siguientes parámetros, esto nos da: 12.B.345.B.678.B.901.A.23

$low= 1;
$high = 10;
echo "Número aleatorio entre $low y $high: ".rand($low, $high) . "\n";
echo "Número aleatorio entre $low y $high: ".mt_rand($low, $high) . "\n";
echo "Número aleatorio entre $low y $high: ".random_int($low, $high) . "\n";