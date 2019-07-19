<?php
/*Zadatak 1.*/
    $litar = 1000;
    $galon = $litar * 3.785;
    echo $galon . " Galona";
    echo "<br>";

    $galon = 3785;
    $litar = $galon / 3.785;
    echo $litar . " Litara";
    echo "<br>";

/*Zadatak 2.*/
    $farenhajt = 70;
    $celzijus = ($farenhajt - 32) * 5 / 9;
    $kelvin = $celzijus + 273.15;
    echo $kelvin . " Kelvina";
    echo "<br>";

    $kelvin = 350;
    $celzijus = $kelvin - 273.15;
    $farenhajt = $celzijus / (5 / 9) +32;
    echo $farenhajt . " Farenhajta";

?>