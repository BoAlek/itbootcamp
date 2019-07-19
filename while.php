<html>
<head>
    <style>
        .blue{
            color:blue;
        }
        .yellow{
            color:yellow;
        }
        .red{
            color:red;
        }
    </style>
</head>
<body>
<?php
/*WHILE petlja*/

/*Ispis brojeva od 1 do 10*/
$i = 1;
while ($i <= 10)
{
    echo $i;
    echo "<br>";
    $i++;
}
echo "<br>";

/*Drugi nacin */
$i = 0;
while ($i < 10)
{
    $i++;
    echo $i;
    echo "<br>";
}
echo "<br>";

 /* Zadatak 1. Ispisati brojeve od 1 do 20 */
 $i = 1;
while ($i <= 20)
{
    echo $i;
    echo "<br>";
    $i++;
}
echo "<br>";

/* Zadatak 2. Ispisati brojeve od 20 do 1 */
$i = 20;
while ($i >= 1)
{
    echo $i;
    echo "<br>";
    $i--;
}
echo "<br>";

/* Drugi nacin */
$i = 0;
while ($i < 20)
{
    echo 20 - $i;
    echo "<br>";
    $i++;

}
echo "<br>";

/* Zadatak 3. Ispisati parne brojeve od 1 do 20 */
$i = 1;
while ($i <= 20)
{
    if($i % 2 == 0)
    {
        echo $i;
        echo "<br>";
    }
    $i++;
}
echo "<br>";

/*Drugi nacin*/
$i = 2;
while ($i <= 20)
{
    echo $i;
    echo "<br>";
    $i = $i + 2;
}
echo "<br>";

/* Zadatak 4. Odrediti kolicnik i ostatak pri deljenju brojeva a sa b bez koriscenja operacija / i %. */
$a = 82;
$b = 8;
$kol = 0;
$ost = $a;
while ($ost >= $b)
{
    $ost = $ost - $b;
    $kol++;
}
echo "$a = $kol * $b + $ost";
echo "<br>";

/* Zadatak 5. Sest paragrafa naizmenicno obojiti sa tri razlicite boje. */
$text = "Some text";
$i = 1;
while ($i <= 6)
{
    if($i % 3 == 1)
    {
        echo "<p class='blue'>$text</p>";
    }
    elseif($i % 3 == 2)
    {
        echo "<p class='yellow'>$text</p>";
    }
    else
    {
        echo "<p class='red'>$text</p>";
    }
    $i++;
}
echo "<br>";

/* Zadatak 6. Odrediti sumu brojeva od 1 do 100. */
$x = 1;
$sum = 0;
while ($x <= 100)
{
    $sum = $sum + $x;
    $x++;
}
echo $sum;
echo "<br>";

/* Zadatak 7. Odrediti sumu brojeva od 1 do n. */
$x = 1;
$n = 95;
$sum = 0;
while ($x <= $n)
{
    $sum = $sum + $x;
    $x++;
}
echo $sum;
echo "<br>";

/* Zadatak 8. Odrediti sumu brojeva od n do m. */
$n = 3;
$m = 6;
$sum = 0;
while ($n <= $m)
{
    $sum = $sum + $n;
    $n++;
}
echo $sum;
echo "<br>";

/* Zadatak 9. Odrediti proizvod projeva od n do m. */
$n = 2;
$m = 5;
$i = $n; /* Kada uvedemo promenljivu $i (brojac), ne menja se vrednost n. */
$proizvod = 1;
while ($i <= $m)
{
    $proizvod = $proizvod * $i;
    $i++;
}
echo $proizvod;
echo "<br>";

/* Zadatak 10. Odrediti sumu kvadrata brojeva od n do m. */
$n = 2;
$m = 5;
$sum = 0;
$i = $n;
while ($i <= $m)
{
    $sum += $i * $i;
    /* $suma += pow($i, 2); */
    /* $suma += $i**2 */ 
    $i++;
}
echo $sum;
echo "<br>";
?>
</body>
</html>