<link rel="stylesheet" href="style.css">

<?php


$nimi = "Kardo Mäetam";
$n = 32; // täisarv e integer
$n1 = 2.4423; // kümnendmurd e float e ujukomaarv
$t = true; // tõeväärtus e boolean

$m = array (8, "Tere", $n, 3.14, $nimi, false);

$n2 = 112;
$n3 = "112";

$nn =$n2 + $n1;
$nm =$n2.$n1;

echo "<h1>Tere IT-17E! Mina olen $nimi</h1>";

echo '<h1>Tere IT-17E! Mina olen $nimi</h1>';

echo "<p>See ei ole enam pealkiri, vaid lihtsalt sisu</p>"; //erinevate html tagide kasutamine

echo "<p>".$m[2]."</p>"; // concatenate ehk ühendamine

echo $nn." ".$nm;

echo "$n2 krüpteeritult on: ". md5($n2);

?>