<?php
/* 1. Zadatak */
function suma ($n, $m)
{
    $sum=0;
    for($i=$n; $i<=$m; $i++)
    {
        $sum=0;
        if($i%3==0 and $i%7!=0)
        {
            $rezultat =  $sum +=$i;
            return $rezultat;
        }
    }
}
$rezultat = suma (1, 5);
echo $rezultat;
echo "<br>";

/* 2. Zadatak */
function ispis($color, $font, $n)
{
    $i=0;
    while($i < $n)
    {
        echo "<p style='color:$color'; 'font-size:$font'>$i</p>";
        $i++;
    }
}
ispis ("blue", 25, 3);
echo "<br>";

/* 3. Zadatak */
function krvnagrupa($tip)
{
    switch ($tip)
    {
        case "a+":
            echo "Daje krv: a+ i ab+, Prima krv od: a+ i 0+";
            break;
        case "0+":
            echo "Daje krv: 0+,a+,b+ ab+, Prima krv od: 0+";
            break;
        case "b+":
            echo "Daje krv: b+ i ab+, Prima krv od: b+ i 0+";
            break;
        case "ab+":
            echo "Daje krv: ab+, Prima krv od: svih krvnih grupa";
            break;
        default:
        echo "Los unos";
    }
}
krvnagrupa("ab+");
?>