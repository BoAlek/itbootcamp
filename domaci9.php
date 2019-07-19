<?php
    /* 1. Zadatak. Za tri uneta broja ispisati koji od njih je najveći, koji od njih je srednji, a koji od nih je najmanji. */
    $x = "3";
    $y = "9";
    $z = "6";
    if ($x>$y and $x>$z)
    {
        echo "Naveci broj: $x ";
        if ($y>$z)
            echo "Srednji broj: $y Najmanji broj: $z";
        else
        {
            echo "Srednji broj: $z Najmanji broj: $y";
        }
    }
    elseif ($y>$x and $y>$z)
    {
        echo "Najveci broj: $y ";
        if ($x>$z)
            echo "Srednji broj: $x Najmanji broj: $z";
        else
        {
            echo "Srednji broj: $z Najmanji broj: $x";
        }
    }
    else
    {
        echo "Najveci broj : $z ";
        if ($x>$y)
            echo "Srednji broj: $x Najmanji broj: $y";
        else
        {
            echo "Srednji broj: $y Najmanji broj: $x";
        }
    }
    echo "<br>";

    /* 2. Zadatak. Učitati dva cela broja i ispitati da li je veći od njih paran. */
    $x = "5";
    $y = "8";
    if ($x > $y)
    {
        if($x % 2 == 0)
        {
        echo "Broj je paran";  
        }
        else
        {
        echo "Broj je neparan";
        }
    }
    elseif ($y > $x)
    {
        if($y % 2 == 0)
        {
        echo "Broj je paran";  
        }
        else 
        {
        echo "Broj je neparan";
        }
    }
    echo "<br>";

    /* 3. Zadatak. Jedan butik ima radno vreme od 9h do 20h radnim danima, a vikendom od 10h do 18h. 
                    Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno otvoren. */
    $dan = date('N');
    $vreme = date('G');
    if ($dan <= 5 and $vreme >=9 and $vreme <=20)
    {
        echo "Otvoreno";
    }
    elseif ($dan >= 6 and $vreme >=10 and $vreme <=18)
    {
        echo "Otvoreno";
    }
    else
    {
        echo "Zatvoreno";
    }
    echo "<br>";

    /* 4. Zadatak. Na osnovu unete boje na engleskom jeziku obojiti tekst paragrafa u crveno, zeleno ili plavo. 
                    Ukoliko nije uneta ni jedna od ove tri boje, tekst paragrafa obojiti u žuto. */
    $color = "blue";
    switch ($color)
    {
        case "red":
            echo "<p style=color:red;>Ovaj paragraf je crvene boje.</p>";
            break;
        case "green":
            echo "<p style=color:green;>Ovaj paragraf je zelene boje.</p";
            break;
        case "blue":
            echo "<p style=color:blue;>Ovaj paragraf je plave boje.</p";
            break;
        default:
            echo "<p style=color:yellow;>Ovaj paragraf je zute boje.</p";
    }
?>