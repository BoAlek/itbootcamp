<?php
/* FUNKCIJE */

function moja_funkcija()
{
    echo "Zdravo svete!";
}
moja_funkcija(); // poziv funkcije
echo "<br>";

function mojaFunkcija($tekst)
{
    echo $tekst;
}
$tekst = "Zdravo svete!!!";
mojaFunkcija($tekst);
echo "<br>";

function zdravo()
{
    echo "Zdravo!!! <br>";
}

for($i=1; $i<=5; $i++)
{
    zdravo();
}
echo "<br>";


function it($i)
{
    echo "Broj $i <br>";
}
for($i=1; $i<=5; $i++)
{
    it($i);
}
echo "<br>";


function ime($i)
{
    echo "Bogdan <br>";
}
for($i=1; $i<=5; $i++)
{
    ime($i);
}


function prezime($i)
{
    echo "Aleksic <br>";
}
for($i=1; $i<=10; $i++)
{
    prezime($i);
}
echo "<br>";


function zbir($a, $b)
{
    $rezultat = $a + $b;
    echo $rezultat;
    echo "<br>";
}
zbir (10, 50);
$a = 5;
$b = 7;
zbir ($a, $b);
$x = 12;
$y = 35;
zbir ($x, $y);
zbir ($x, $x);
echo "<br>";

function zbirbrojeva($a, $b)
{
    $rez = $a + $b;
    return $rez;
}
$rezultat = zbirbrojeva(5,17);
echo $rezultat;
echo "<br>";

function razlikabrojeva($a, $b)
{
    $rez = $a - $b;
    return $rez;
}
$rezultat = razlikabrojeva(12,7);
echo $rezultat;
echo "<br>";

/* Zadatak 1. Napisati funkciju pozdrav kojoj se prosleđuje ime i prezime, a funkcija ispisuje pozdrav. 
Na primer za uneto ime Jelena i prezime Matejić, funkcija ispisuje Zdravo Jelena Matejić. */
function imeprezime ($ime, $prezime)
{
    echo "Zdravo $ime $prezime";
}
$ime = "Jelena";
$prezime = "Matejic";
imeprezime ($ime, $prezime);
echo "<br>";

/* Zadatak 2. Napisati funkciju zbir koja računa zbir dva realna broja.
Šta bi trebalo izmeniti da bi se dobila razlika, proizvod ili količnik dva broja. */
function zbirdvabroja($x, $y)
{
    $rezultat = $x + $y;
    return $rezultat;
}
$rezultat = zbirdvabroja(4,5);
echo $rezultat;
echo "<br>";

/* Zadatak 3. Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan. */

/* Zadatak 4. Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. 
Zatim napisati funkciju maks4 koja vraća najveći od četiri prosleđena realna broja. */
function maksDva($a, $b)
{
    if($a>$b)
    {
        return $a;
    }
    else
    {
        return $b;
    }
}
$m2 = maksDva(2, 5);
echo $m2;
echo "<br>";

function maksCetiri($a, $b, $c, $d)
{
    $maks1 = maksDva($a, $b);
    $maks2 = maksDva($c, $d);
    $maks = maksDva($maks1, $maks2); // Drugi nacin: $maks = maksDva(maksDva($a, $b), maksDva($c, $d));
    return $maks;
}
$m = maksCetiri(1,-3,-5,7);
echo $m;
echo "<br>";

/* Zadatak 5. Napraviti funkciju koja prikazuje sliku za prosledjenu adresu slike. */
function slika($adresa)
{
    echo "<img src=$adresa>";
}
slika('http://pngimagesfree.com/NATURE/Tree/thumb/Bright_green_tree_png-image.png');
echo "<br>";

/* Zadatak 6. Napraviti funkciju koja za unetu boju na engleskom jeziku boji tekst paragrafa u tu boju. */
function bojiParagraf($boja)
{
    echo "<p style='color:$boja'>Neki tekst</p>";
}
bojiParagraf("red");
bojiParagraf("orange");
bojiParagraf("green");

/* Zadatak 7. Napraviti funkciju kojoj se prosleđuje ceo broj, a ona ispisuje tekst koji ima prosleđenu veličinu fonta. */
function velicinaFonta($x)
{
    echo "<p style='font-size:$x'>Tekst</p>";
}
velicinaFonta(25);

/* Zadatak 8. Napraviti funkciju koja pet puta ispisuje istu rečenicu, 
a veličina fonta rečenice treba da bude jednaka vrednosti iteratora. */
function petPutaIspis()
{
    for($i=45; $i<70; $i+=5)
    {
        echo "<p style='font-size:$i'>Tekst</p>";
    }
}
petPutaIspis();

/* Zadatak 9. Napisati program koji sadrži funkciju sedmiDan koja za uneti broj n ispisuje n-ti dan u nedjelji 
(npr. za 1 se ispisuje „Ponedjeljak“, za 7 ispisuje “Nedelja”, a za 8 opet “Ponedeljak”).
Pitanje: Kako bismo realizovali ovaj zadatak da se tražio n-ti mesec u godini? */
$rBrDana = 8;
function sedmidan($rBrDana)
{
    if($rBrDana % 7 == 1)
{
    echo "Ponedeljak";
}
elseif($rBrDana % 7 == 2)
{
    echo "Utorak";

}
elseif($rBrDana % 7 == 3)
{
    echo "Sreda";
    
}
elseif($rBrDana % 7 == 4)
{
    echo "Cetvrtak";
    
}
elseif($rBrDana % 7 == 5)
{
    echo "Petak";
    
}
elseif($rBrDana % 7 == 6)
{
    echo "Subota";
    
}
elseif($rBrDana % 7 == 0)
{
    echo "Nedelja";
    
}
else
{
    echo "a";
}
}
sedmidan(212);
echo "<br>";

/*Za mesece u godini */
function mesec($rBrMeseca)
{
switch($rBrMeseca)
{
    case($rBrMeseca%12==1):
    echo "Januar";
    break;
    case($rBrMeseca%12==2):
    echo "Februar";
    break;
    case($rBrMeseca%12==3):
    echo "Mart";
    break;
    case($rBrMeseca%12==4):
    echo "April";
    break;
    case($rBrMeseca%12==5):
    echo "Maj";
    break;
    case($rBrMeseca%12==6):
    echo "Jun";
    break;
    case($rBrMeseca%12==7):
    echo "Jul";
    break;
    case($rBrMeseca%12==8):
    echo "Avgust";
    break;
    case($rBrMeseca%12==9):
    echo "Septembar";
    break;
    case($rBrMeseca%12==10):
    echo "Oktobar";
    break;
    case($rBrMeseca%12==11):
    echo "Novembar";
    break;
    case($rBrMeseca%12==0):
    echo "Decembar";
    break;
    default:
    echo "Greska";
}
}
mesec(13);
echo "<br>";
/* Zadatak 10. Napraviti funkciju deljivSaTri koja se koristi u ispisivanju brojeva koji su deljivi sa tri u intervalu od n do m.
Prebrojati koliko ima ovakvih brojeva od n do m. */
function deljivSaTri($n, $m)
{
    $br = 0;
    for($i=$n; $i<$m; $i++)
    {
        if($i % 3 == 0)
        {
            echo "$i<br>";
            $br++; //br=br+1; br+=1;
        }
    }
    echo "Broj brojeva: $br";
}
deljivSaTri(3, 10);
echo "<br>";
/* Zadatak 11. Napisati funkciju koja ispisuje brojeve u intervalu od n do m koji su deljivi sa tačno dva od brojeva 2, 3, 5 i 7. */
function deljivi($n, $m)
{
    for($i=$n; $i<=$m; $i++)
    {
        $br=0;
        if($i%2==0)
        {
            $br++;
        }
        if($i%3==0)
        {
            $br++;
        }
        if($i%5==0)
        {
            $br++;
        }
        if($i%7==0)
        {
            $br++;
        }
        if($br == 2)
        {
            echo $i;
            echo "<br>";
        }  
    }
}
$n=5;
$m=15;
deljivi ($n, $m);
?>