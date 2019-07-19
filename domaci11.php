<?php
/*1. Zadatak. Napisati funkciju ​digitron​ koja prima tri parametra: 
Prva dva su brojevi, a treći je karakter koji predstavlja aritmetičku operaciju (‘+’, ‘-’, ‘*’ ili ‘/’). 
Potrebno je da funkcija izvrši odgovarajuću aritmetičku operaciju nad zadatim brojevima. 
Na primer, ​digitron(5, 8, ‘*’) kao rezultat daje 5 * 8 = 40. */
function digitron($x, $y, $z)
{
    if ($z == "+")
    {
        $rezultat=$x + $y;
        return $rezultat;
    }
    elseif ($z == "-")
    {
        $rezultat=$x - $y;
        return $rezultat;
    }
    elseif ($z == "*")
    {
        $rezultat=$x * $y;
        return $rezultat;
    }
    elseif ($z == "/")
    {
        $rezultat=$x / $y;
        return $rezultat;
    }
}
$rezultat = digitron(10, 5, '*');
echo "Rezultat je: $rezultat";
?>