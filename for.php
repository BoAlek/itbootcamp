<?php
/* FOR petlja */
/* Zadatak 1. Ispisati brojeve od 1 do 20. */
for ($i=1; $i<=20; $i++)
{
    echo "$i";
    echo "<br>";
}
echo "<br>";

/* Zadatak 2. Ispisati brojeve od 20 do 1. */
for ($i=20; $i>=1; $i--)
{
    echo "$i";
    echo "<br>";
}
echo "<br>";

/* Zadatak 3. Ispisati parne brojeve od 1 do 20 */
for ($i=1; $i<=20; $i++)
{
    if($i%2==0)
    {
        echo "$i";
        echo "<br>";
    } 
}
echo "<br>";

/* Drugi nacin */
for ($i=2; $i<=20; $i+=2)
{
    echo "$i";
    echo "<br>";
}
echo "<br>";

/* Zadatak 4. Ispisati dvostruku vrednost brojeva od 5 do 15 */
for($i=5; $i<=15; $i++)
{
    echo 2*$i;
    echo "<br>";
}
echo "<br>";

/* Zadatak 5. Odrediti sumu brojeva od 1 do 100 */

/* Zadatak 6. Odrediti sumu brojeva od 1 do n */
$sum = 0;
$n = 5;
for($i=1; $i<=$n; $i++)
{
    $sum += $i; /* ili $sum = $sum + $i */
}
echo $sum;
echo "<br>";

/* Zadatak 7. Odrediti sumu brojeva od n do m */
$sum = 0;
$n = 5;
$m = 7;
for($i = $n; $i<=$m; $i++)
{
    $sum += $i;
}
echo $sum;
echo "<br>";

/* Zadatak 8. Odrediti proizvod brojeva od n do m */
$proizvod = 1;
$n = 5;
$m = 7;
for($i = $n; $i<=$m; $i++)
{
    $proizvod *= $i;
}
echo $proizvod;
echo "<br>";

/* Zadatak 9. Odrediti sumu kvadrata brojeva od n do m */
$suma = 0;
$n = 1;
$m = 5;
for($i=$n; $i<=$m; $i++)
{
    $suma += $i * $i;
}
echo $suma;
echo "<br>";

/* Zadatak 10. Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. For petljom u HTML-u ispisati svaku od slicica uz pomoc brojaca (iteratora) */
for ($i=1; $i<=3; $i++)
{
    echo "<img src='$i.png'>";
    echo "<br>";
}

/* Zadatak 11. Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30. */
$sum = 0;
for($i=1; $i<=30; $i++)
{
    if($i % 9 == 0)
    {
        $sum += $i;
    }
}
echo $sum;
echo "<br>";

/* Zadatak 12. Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100. */
$proizvod = 1;
for($i=20; $i<=100; $i++)
{
    if($i % 11==0)
    {
        $proizvod *= $i;
    }
}
echo $proizvod;
echo "<br>";

/* Zadatak 13. Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150. */
$br = 0;
for($i=5; $i<=150; $i++)
{
    if($i % 13==0)
    {
        $br +=1;
        // $br = $br+1;
        // $br = $br++;
    }
}
echo $br;
echo "<br>";

/* Zadatak 14. Ispitati aritmeticku srdinu brojeva od n do m. */
$n = 5;
$m = 15;
$sum = 0;
$br = 0;
for($i=$n; $i<=$m; $i++)
{
    $sum += $i;
    $br += 1;
}
$sr = $sum / $br;
echo $sr;
echo "<br>";

/* Zadatak 15. Prebrojati koliko brojeva od n do m je pozitivno, a koliko je negativno. */
$n = -5;
$m = 5;
$poz = 0;
$neg = 0;
for($i=$n; $i<=$m; $i++)
{
    if($i>=0)
    {
        $poz++;
    }
    else
    {
        $neg++;
    }
}
echo "Pozitivni su: $poz <br>";
echo "Negativni su: $neg";
echo "<br>";

/* Zadatak 16. Prebrojati koliko brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5. */
$brDeljivih = 0;
for($i=5; $i<=50; $i++)
{
    if($i%3==0 or $i%5==0)
    {
        $brDeljivih++;
    }
}
echo $brDeljivih;
echo "<br>";

/* Zadatak 17. Prebrojati i izracunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su. */
$n = 10;
$m = 30;
$sum = 0;
$br = 0;
for($i=$n; $i<=$m; $i++)
{
    $pos = $i%10; //Poslednja cifra, bilo koji broj mod10 dobija se poslednja cifra tog broja.
    if($pos == 4)
    {
        $sum +=$i;
        $br++;
    }
}
echo "Suma je: $sum, broj je: $br";
echo "<br>";

/* Zadatak 18. Ispisati brojeve od n do m, koji su deljivi sa a. */
$n = 5;
$m = 10;
$a = 3;
for ($i=$n; $i<=$m; $i++)
{
    if($i%$a == 0)
    {
        echo "<p>$i</p>";
    }
}
echo "<br>";

/* Zadatak 19. Ispisati brojeve od n do m, koji nisu deljivi sa a. */
$n = 5;
$m = 10;
$a = 3;
for ($i=$n; $i<=$m; $i++)
{
    if($i%$a != 0)
    {
        echo "<p>$i</p>";
    }
}
echo "<br>";

/* Zadatak 20. Odrediti sumu brojeva od n do m koji nisu deljivi brojem a. */
$n = 5;
$m = 10;
$a = 3;
$sum = 0;
for ($i=$n; $i<=$m; $i++)
{
    if($i%$a != 0)
    {
        $sum += $i;
    }
}
echo $sum;
echo "<br>";

/* Zadatak 21. Odrediti proizvod brojeva od n do m koji su deljivi a. */
$n = 5;
$m = 10;
$a = 5;
$pro = 1;
for ($i=$n; $i<=$m; $i++)
{
    if($i%$a == 0)
    {
        $pro *= $i;
    }
}
echo $pro;
echo "<br>";
?>