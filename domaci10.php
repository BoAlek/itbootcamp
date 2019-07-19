<?php
/* 1. Zadatak. Odrediti proizvod brojeva od 1 do 20, a potom od njega oduzeti zbir brojeva od 1 do 30. 
    a) Koristeći while petlju 
    b) Kotisteći for petlju */
    // a)
    $x=1;
    $y=20;
    $z=30;
    $i=$x;
    $proizvod=1;
    $zbir=0;
    while($i<=$y)
    {
        $proizvod *= $i;
        $i++;
    }
    while($x<=$z)
    {
        $zbir +=$x;
        $x++;
    }
    $rezultat = $proizvod - $zbir;
    echo "<p>Proizvod - Zbir = $rezultat</p>";

    // b)
    $proizvod=1;
    $zbir=0;
    for($i=1; $i<=20; $i++)
    {
        $proizvod *= $i;
    }
    for($i=1; $i<=30; $i++)
    {
        $zbir +=$i;
    }
    $rezultat = $proizvod - $zbir;
    echo "<p>Proizvod - Zbir = $rezultat</p>";
    
/* 2. Zadatak. Odrediti sumu kubova brojeva od n do m. 
    a) Koristeći while petlju 
    b) Koristeći for petlju. */
    // a)
    $n=2;
    $m=4;
    $suma=0;
    while($n<=$m)
    {
        $suma += ($n*$n*$n);
        $n++;
    }
    echo "<p>Suma kubova je: $suma</p>";

    // b)
    $n=2;
    $m=4;
    $suma=0;
    for($i=$n; $i<=$m; $i++)
    {
        $suma += ($i*$i*$i);
        
    }
    echo "<p>Suma kubova je: $suma</p>";
?>