<?php
/*SWITCH*/
$boja = "crvena";
switch($boja)
{
    case "crvena":
        echo "Odabrali ste crvenu boju!";
        break;
    case "plava":
        echo "Odabrali ste plavu boju!";
        break;
    case "zelena":
        echo "Odabrali ste zelenu boju!";
        break;
    default:
        echo "Niste odabrali crvenu, plavu i zelenu boju!";
}
echo "<br>";

/*  Zadatak 1. Za uneti redni broj dana ispisati koji je to dan u nedelji (1. dan je ponedeljak).*/
$dan = date('N');
switch ($dan)
{
    case "1":
        echo "Ponedeljak";
        break;
    case "2":
        echo "Utorak";
        break;
    case "3":
        echo "Sreda";
        break;
    case "4":
        echo "Cetvrtak";
        break;
    case "5":
        echo "Petak";
        break;
    case "6":
        echo "Subota";
        break;
    case "7":
        echo "Nedelja";
        break;
    default:
        echo "Los unos";
}
echo "<br>";

/* Zadatak 2. Za unetu ocenu ucenika ispisati njegov uspeh te skolske godine. */
$ocena = 3;
switch ($ocena)
{
    case "1":
        echo "Nedovoljan";
        break;
    case "2":
        echo "Dovoljan";
        break;
    case "3":
        echo "Dobar";
        break;
    case "4":
        echo "Vrlo dobar";
        break;
    case "5":
        echo "Odlican";
        break;
    default:
        echo "Los unos";
}
echo "<br>";

/* Zadatak 3. Za uneti paran broj manji od 10 ispitati da li je uneti broj nula, dvojka, cetvorka, sestica, osmica ili je unos pogresan.*/
$broj = 6;
switch ($broj)
{
    case "0":
        echo "Nula";
        break;
    case "2":
        echo "Dva";
        break;
    case "4":
        echo "Cetiri";
        break;
    case "6":
        echo "Sest";
        break;
    case "8":
        echo "Osam";
        break;
    default:
        echo "Los unos";
}
echo "<br>";

/* Zadatak 4. Za uneta dva broja i karakter napraviti kalkulator koji vrsi mnozenje ta dva broja ukoliko je uneto slovo 'm', deljenje ukoliko je uneto slovo 'd',
sabiranje ukoliko je uneto slovo 's' ili oduzimanje ukoliko je uneto slovo 'o'.*/
$broj1 = 2;
$broj2 = 4;
$m = "m";
$d = "d";
$s = "s";
$o = "o";
switch ($o)
{
    case "m":
        echo $broj1 * $broj2;
        break;
    case "d":
        echo $broj1 / $broj2;
        break;
    case "s":
        echo $broj1 + $broj2;
        break;
    case "o":
        echo $broj1 - $broj2;
        break;
    default:
        echo "Los unos";
}
echo "<br>";

 /* Zadatak 5. Za preuzeti dan sa racunara ispisati jos koliko dana je preostalo do vikenda. */
 $dan = date('N');
 switch ($dan)
 {
    case "1":
        echo "5 dana";
        break;
    case "2":
        echo "4 dana";
        break;
    case "3":
        echo "3 dana";
        break;
    case "4":
        echo "2 dana";
        break;
    case "5":
        echo "1 dana";
        break;
    default:
        echo "Los unos";
 }
 echo "<br>";

 /* Zadatak 6. Preuzeti redni broj meseca sa racunara i ispisati koji je to mesec u godini. */
 $mesec = date('n');
 switch ($mesec)
 {
    case "1":
        echo "Januar";
        break;
    case "2":
        echo "Februar";
        break;
    case "3":
        echo "Mart";
        break;
    case "4":
        echo "April";
        break;
    case "5":
        echo "Maj";
        break;
    case "6":
        echo "Jun";
        break;
    case "7":
        echo "Jul";
        break;
    case "8":
        echo "Avgust";
        break;
    case "9":
        echo "Septembar";
        break;
    case "10":
        echo "Oktobar";
        break;
    case "11":
        echo "Novembar";
        break;
    case "12":
        echo "Decembar";
        break;
    default:
        echo "Los unos";
 }
 echo "<br>";

 /* Zadatak 7. */
?>