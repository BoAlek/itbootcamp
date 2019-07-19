<?php
    $a = 7;
    $b = 3;
    if ($a > $b)
    {
        echo "a je vece od b";
    }
    echo "<br>";

    $a = 5;
    $b = 5;
    if ($a == $b)
    {
        echo "a i b su jednaki";
    }
    echo "<br>";

    $a = 7;
    $b = 3;
    if ($a > $b)
    {
        echo "Vrednost a je veca od vrednosti b";
    }
    else
    {
        echo "Vrednost a nije veca od vrednosti b";
    }
    echo "<br>";

    /* 1 zadatak Za dva uneta broja ispisati koji je veći a koji je manji.
    $a = 5;
    $b = 3;
    if ($a > $b)
    {
        echo "Vrednost a je veca";
    }
    elseif ($a < $b)
    {
        echo "vrednost a je manja";
    }
    else {
        echo "a i b su jednaki";
    } */


    /* 2 zadatak. Ispitati da li je uneta temperatura u plusu ili je u minusu. Ukoliko je temperatura nula, računati da je u plusu. */
    $a = -10;
    if ($a >= 0)
    {
        echo "Temperatura je u plusu";
    }
    else
    {
        echo "Temperatura je u minusu";
    }
    echo "<br>";

    /* 3 zadatak. U odnosu na pol (muški/ženski) koji je korisnik uneo prikazati odgovarajući avatar. */
    $pol = "m";
    if ($pol == "m")
    {
        echo "<img src='images/maleIcon.png'>";
    }
    else{
        echo "<img src='images/femaleIcon.png'>";
    }
    echo "<br>";

    /* 4 zadatak. U odnosu na preuzete vrednosti AM i PM sa svog računara, ispisati da li je trenutno jutro ili popodne. */
    $x = date("A");
    if ($x == "PM")
    {
        echo "Popodne";
    }
    else {
        echo "Jutro";
    }
    echo "<br>";

    /* 5 zadatak. Za preuzetu godinu sa računara i unetu godinu rođenja izračunati da li je osoba punoletna ili maloletna. */
    $godinaRodjenja = 1994;
    $trenGodina = date ('Y');
    $godine = $trenGodina - $godinaRodjenja;
    echo $godine;
    echo "<br>";

    /* 6 zadatak. Odrediti najveći od tri uneta broja */
    $a = 5;
    $b = 9;
    $c = 12;
    $maks = $a;
    if ($maks < $b)
    {
        $maks = $b;
    }
    if ($maks < $c)
    {
        $maks = $c;
    }
    echo $maks;
    echo "<br>";

    /* 7. zadatak. Na osnovu unetog broja poena ispitati koju ocenu profesor treba da upiše učeniku. 
    Učenik je položio ispit ukoliko ima više od 50 poena, u suprotnom je pao ispit.
    Za više od 50 poena učenik dobija ocenu 6,
    za više od 60 poena učenik dobija ocenu 7,
    za više od 70 poena učenik dobija ocenu 8,
    za više od 80 poena učenik dobija ocenu 9 i
    za više od 90 poena učenik dobija ocenu 10. */
    $brojPoena = 85;
    if ($brojPoena <= 50)
    {
        echo "Nije polozio";
    }
    elseif ($brojPoena <= 60)
    {
        echo "6";
    }
    elseif ($brojPoena <= 70)
    {
        echo "7";
    }
    elseif ($brojPoena <= 80)
    {
        echo "8";
    }
    elseif ($brojPoena <= 90)
    {
        echo "9";
    }
    else
    {
        echo "10";
    }
    echo "<br>";

    /* Zadatak 8. Ispitati da li je radni dan ili vikend */
    $dan = date('N');
    if($dan <= 5)
    {
        echo "<p>Radni dan</p>";
    }
    else
    {
        echo "<p>Vikend</p>";
    }
    echo "<br>";

    /* 9 zadatak. Za vreme preuzeto sa racunara ispisati dobro jutro za vreme manje od 12 sati ujutru, 
        dobar dan za vreme manje od 18 sati popodne i u ostalim slucajevima ispisati dobro vece */
    $sati = date("G");
    if($sati < 12)
    {
        echo "Dobro jutro";
    }
    elseif($sati < 18)
    {
        echo "Dobar dan";
    }
    else
    {
        echo "Dobro vece";
    }
    echo "<br>";

    /* 10 zadatak. Uporediti dva uneta datuma i ispisati koji od njih je raniji. */
    $dan1 = 11;
    $mesec1 = 7;
    $godina1 = 2019;
    $dan2 = 1;
    $mesec2 = 7;
    $godina2 = 2019;
    if ($godina1 < $godina2)
    {
        echo "<p>Prvi datum je raniji</p>";
    }
    elseif ($godina1 > $godina2)
    {
        echo "<p>Drugi datum je raniji</p>";
    }
    elseif ($mesec1 < $mesec2)
    {
        echo "<p>Prvi datum je raniji</p>";
    }
    elseif ($mesec1 > $mesec2)
    {
        echo "<p>Drugi datum je raniji</p>";
    }
    elseif ($dan1 < $dan2)
    {
        echo "<p>Prvi datum je raniji</p>";
    }
    elseif ($dan1 > $dan2)
    {
        echo "<p>Drugi datum je raniji</p>";
    }
    else
    {
        echo "<p>Datumi su jednaki</p>";
    }
    echo "<br>";

    /* 11 zadatak. Radno vreme firme je od 9 do 17 sati. Preuzeti vreme sa racunara i ispitati da li u to vreme firma radi ili ne. */
    $vreme = ('G');
    if ($vreme < 9)
    {
        echo "<p>Firma ne radi</p>";
    }
    elseif($vreme <= 17)
    {
        echo "<p>Firma radi</p>";
    }
    else {
        echo "<p>Firma ne radi</p>";
    }
    echo "<br>";

    /* 12 zadatak. Za unet pocetak i kraj radnog vremena dva lekara ispisati DA ukoliko se njihove smene preklapaju, u suprotnom ispisati NE. */
    $p1 = 1;
    $k1 = 8;
    $p2 = 8;
    $k2 = 12;
    if ($p1 < $p2)
    {
        if ($p2 <= $k1)
        {
            echo "DA";
        }
        else
        {
            echo "NE";
        }
    }
    else
    {
        if ($p1 <= $k2)
        {
            echo "DA";
        }
        else{
            echo "NE";
        }
    }
    echo "<br>";

    /* 13 Zadatak. Za uneti broj ispitati da li je paran ili ne. */
    $broj = 7;
    if ($broj % 2 == 0)
    {
        echo "Paran";
    }
    else
    {
        echo "Neparan";
    }
    echo "<br>";

    /* Drugi nacin */
    $broj = 7;
    if ($broj % 2 != 0)
    {
        echo "Neparan";
    }
    else
    {
        echo "Paran";
    }
    echo "<br>";

    /* 14 Zadatak. Za uneti broj ispitati da li je deljiv sa 3 ili ne. */
    $broj = 13;
    if ($broj % 3 == 0)
    {
        echo "<p>Deljiv je sa 3</p>";
    }
    else
    { 
        echo "<p>Nije deljiv sa 3</p>";
    }
    echo "<br>";

    /* 15. Zadatak. Za dva uneta broja, od većeg učitanog broja oduzeti manji i rezultat ispisati na ekranu. */
    $a = 7;
    $b = -5;
    if ($a > $b)
    {
        $rez = $a - $b;
    }
    else{
        $rez = $b - $a;
    }
    echo $rez;
    echo "<br>";

    /* 16. Zadatak. Za uneti broj ispitati da li je on manji ili veći od nule.
     Ukoliko je manji ili jednak nuli ispisati njegov prethodnik, a ukoliko je veći od nule ispisati njegov sledbenik. */
    $broj = -5;
    if ($broj <= 0)
    {
        $broj = $broj - 1;
    }
    else{
        $broj = $broj +1;
    }
    echo $broj;
    echo "<br>";

    /* 18. Zadatak. Za učitani broj ispitati da li je ceo. */
    $broj = 7.2;
    if ((int)($broj) == $broj)
    {
        echo "<p>Ceo broj>/p>";
    }
    else
    {
        echo "<p>Decimalan broj</p>";
    }
    echo "<br>";

    /* UGNJEZDENO GRANANJE */
    $pol = "z";
    $godine = "24";
    if ($pol == "z")
    {
        echo "Zena";
        if ($godine >=18)
        {
            echo "Punoletna";
        }
        else
        {
            echo "Maloletna";
        }
    }
    else
    {
        echo "Muskarac";
        if ($godine >=18)
        {
            echo "Punoletan";
        }
        else
        {
            echo "Maloletan";
        }
    }
    echo "<br>";

    /* LOGICKI OPERATERI */
    $pol="z";
    $god="24";
    if ($pol=="z" and $god>="18")
    {
        echo "zena, punoletna";
    }
    elseif ($pol=="z" and $god<"18")
    {
        echo "zena, maloletna";
    }
    elseif ($pol=="m" and $god>="18")
    {
        echo "muskarac, punoletan";
    }
    else
    {
        echo "muskarac, maloletan";
    }
    echo "<br>";

    /* 21. Zadatak. Naći koji je najveći od tri uneta broja $a, $b i $c. */
    $aa=4;
    $bb=5;
    $cc=6;
    if ($aa>$bb && $aa>$cc)
    {
        echo "Maks je $a";
    }
    elseif ($bb>$cc && $$bb>$aa)
    {
        echo "Maks je $bb";
    }
    else
    {
        echo "Maks je $cc";
    }
    echo "<br>";

    /* 22. Zadatak. Ispisati na ekranu „ekstremna temperatura“ ukoliko je temperatura manja od -15 stepeni Celzijusovih  i veća od 40 stepeni Celzijusovih. */
    $t= 20;
    if ($t<-15 or $t>40)
    {
        echo "Ekstremna";
    }
    else
    {
        echo "Nije ekstremna";
    }
?>