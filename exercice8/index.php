<?php

function addition(float $a, float $b): float
{
    return $a + $b;
}

function soustraction(float $a, float $b): float
{
    return $a - $b;
}

function multiplication(float $a, float $b): float
{
    return $a * $b;
}

function division(float $a, float $b): float
{
    return $a / $b;
}

function divisionEntiere(float $a, float $b): int
{
    return $a % $b;
}

$a = 2;
$b = 4;

echo "Calculatrice:\n";
echo "A = $a\n";
echo "B = $b\n";
echo "Addition (a+b) = ".addition($a, $b)."\n";
echo "Soustraction (a-b) = ".soustraction($a, $b)."\n";
echo "Multiplication (a*b) = ".multiplication($a, $b)."\n";
echo "Division (a/b) = ".division($a, $b)."\n";
echo "Division entière (a%b) = ".divisionEntiere($a, $b)."\n";
