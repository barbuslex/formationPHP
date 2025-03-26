<?php
require('classes/Calculatrice.php');

$a = 2;
$b = 4;

echo "Calculatrice:\n";
echo "A = $a\n";
echo "B = $b\n";
echo "Addition (a+b) = ".Calculatrice::addition($a, $b)."\n";
echo "Soustraction (a-b) = ".Calculatrice::soustraction($a, $b)."\n";
echo "Multiplication (a*b) = ".Calculatrice::multiplication($a, $b)."\n";
echo "Division (a/b) = ".Calculatrice::division($a, $b)."\n";
echo "Division entière (a%b) = ".Calculatrice::divisionEntiere($a, $b)."\n";
