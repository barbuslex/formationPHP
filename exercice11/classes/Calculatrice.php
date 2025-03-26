<?php 
class Calculatrice
{
    static function addition(float $a, float $b): float
    {
        return $a + $b;
    }

    static function soustraction(float $a, float $b): float
    {
        return $a - $b;
    }

    static function multiplication(float $a, float $b): float
    {
        return $a * $b;
    }

    static function division(float $a, float $b): float
    {
        return $a / $b;
    }

    static function divisionEntiere(float $a, float $b): int
    {
        return $a % $b;
    }
}