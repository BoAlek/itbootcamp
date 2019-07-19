<html>
    <head>
        <style>
            img{
                width: 150px;
            }
        </style>
    <head>

    <body>
    <?php
        /* Zadatak 1. Data je slika sa svojom putanjom i imenom. Prikazati datu sliku na web stranici. */

        $putanja = "images/slika.jpg";
        echo "<img src='$putanja'>";

        /* Zadatak 2. Za radnika je poznato:- broj radnih sati u mesecu
                                 - cena rada po satu
                                 -procenat odbijanja na osnovu doprinosa 
            Potrebno je odrediti bruto i neto dohodak radnika. */

        $brojSati = 160;
        $cena = 5;
        $procenat = 65;

        $bruto = $brojSati * $cena;
        $neto = $bruto - $bruto * $procenat / 100;
        echo "<p>Bruto zarada: $bruto &euro;,
        Neto zarada: $neto &euro;</p>";

        /* Zadatak 3. Broj minuta pretvoriti u sate i minute. */

        $brojMinuta = 563;
        $sati = (int)($brojMinuta / 60);
        $minuti = $brojMinuta % 60;
        echo "<p>Broj sati: $sati;, broj minuta: $minuti.</p>";
    

        /* Zadatak 4. Ako je vrednost neke robe x dinara, odrediti najmanju kolicinu novcanica od 500din, 100din, 10din i 1din kojima se moze platiti data roba. */

        $x = 2399;
        $petsto = (int)($x / 500);
        $x = $x % 500;
        $sto = (int)($x / 100);
        $x = $x % 100;
        $deset = (int)($x / 10);
        $dinar = $x % 10;
        echo "<p>Petsto: $petsto, Sto: $sto, Deset: $deset, Jedan: $dinar.</P";
    ?>   
    </body>
</html>