<?php
/* Zadatak 1. */
$temperatura = 35;
if ($temperatura >= 100)
{
    echo "Voda kljuca";
}
elseif ($temperatura <= 0)
{
    echo "Voda se ledi";
}
else
{
    echo "Voda je u tecnom stanju";
}
echo "<br>";

/* Zadatak 2. */
$tip = "sangvinik";
if ($tip == "sangvinik")
{
    echo "<img src='images/sangvinik.png'>";
}
elseif ($tip == "melanholik")
{
    echo "<img src='images/melanholik.png'>";
}
elseif ($tip == "kolerik")
{
    echo "<img src='images/kolerik.png'>";
}
elseif ($tip == "flegmatik")
{
    echo "<img src='images/flegmatik.png'>";
}
echo "<br>";

/* Zadatak 3. */
$kcal = 600;
$kj = $kcal * 4.1868;
if ($kj < 2000)
{
    echo "Povecajte dnevni unos";
}
elseif ($kj > 4000)
{
    echo "Smanjite dnevni unos";
}
else
{
    echo "Dnevni unos je u redu";
}
?>