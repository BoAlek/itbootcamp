<?php
echo "Zdravo svete!!!";
echo "<br>";

$x="crni";
$y="zuti";
$z=$x; /* $z je crni */
$x=$y; /* $x je zuti */
$y=$z; /* $y je crni */

echo $x;
echo "<br>";
echo $y;
echo "<br>";
echo $z;
echo "<br>";

/* Zadatak 1. Za unetu cenu robe i kolicinu novca koju je kupac dao, ispisati koliki kusur treba kasika da vrati kupcu. */

$cenaProizvoda = 1500;
$kupac = 2000;
$kusur = $kupac - $cenaProizvoda;
echo $kusur;
echo "<br>";

/* Zadatak 2. Konverzija valuta (dinari u evre). Kurs= 1e=117.81 */

$dinari = 20000;
$euri = $dinari / 117.81;
echo $euri;
echo "<br>";

/* Zadatak 3. Konveryija iz evra u dolare ako je poznata dinarska protivvrednost. 1e=117.81, 1$=104.86 */

$euri = 250;
$dinari = $euri * 117.81;
$dolari = $dinari / 104.86;
echo $euri . " eura = " . $dolari . " dolara.";
echo "<br>";

/* Zadatak 4. Konvertovati stepene celzijusa u farenhajte. */

$cel = 30;
$far = $cel * 9 / 5 + 32;
echo $cel . " cel = " . $far . " far.";
echo "<br>";

/* Zadatak 5. Konvertovati stepene farenhajta u celzijuse. */

$far = 86;
$cel = ($far - 32) * 5 / 9;
echo $far . " far = " . $cel . " cel.";
echo "<br>";

/* Za preuzeto vreme u satima i minutima izracunati koliko je minuta proslo od ponoci */

$sati = 13;
$minuta = 49;
$ukupnoMinuta = $sati * 60 + $minuta;
echo $ukupnoMinuta;
echo "<br>";

/* Druga varijanta je trenutno vreme */
/* date(format) funkcija - vraca trenutni datum i vreme u odredjenom formatu */ /* format = "G" - 24h-vreme (0 - 23) */
																				/* format = "g" - 12h-vreme (0 - 11) */
																				/* format = "H" - 24h-vreme (00 - 23) */
																				/* format = "h" - 12h-vreme (00 - 11) */
																				/* format = "i" - (00 - 59) */
$sati = date("G");
$minuti = date("i");
$ukupnoMinuta = $sati * 60 + $minuti;
echo $ukupnoMinuta;
echo "<br>";
?>