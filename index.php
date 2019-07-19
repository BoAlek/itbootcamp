<?php
$godinaRodjenja = 1990;
$pol = "m";
$tezina = 90;
$visina = 190;
$visinaMetri = $visina * 0.01;
$bmi = $tezina / ($visinaMetri * $visinaMetri);
echo "<p>BMI: $bmi</p>";
echo "<br>";

	
$godinaRodjenja = 1990;
$trenutnaGodina = date ('Y');
$godine = $trenutnaGodina - $godinaRodjenja;
echo "<p>Godine: $godine</p>";

if($pol == "m")
{
	if($bmi<18.5)
	{
		echo "<img src='images/m.png'> Pothranjenost";
	}
	if($bmi < 24.9)
	
	{
		echo "<img src='images/m.png'> Normalna Tezina";
	}
	if($bmi < 29.9)
	{
		echo "<img src='images/m.png'> Povisena tezina";
	}
	else
	{
		echo "<img src='images/m.png'> Prekomerena tezina";
	}
}
elseif ($pol == "z")
{
	if($bmi<18.5){
		echo "<img src='images/z.png'> Pothranjenost";
	}
	if($bmi < 24.9)
	{
		echo "<img src='images/z.png'> Normalna Tezina";
	}
	if($bmi < 29.9)
	{
		echo "<img src='images/z.png'> Povisena Tezina";
	}
	else
	{
		echo "<img src='images/z.png'> Prekomerena tezina";
	}
}
?>