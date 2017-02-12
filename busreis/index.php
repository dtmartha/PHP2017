<?php
/**
 * Created by PhpStorm.
 * User: gebruiker
 * Date: 3-2-2017
 * Time: 11:14
 */
//echo "Hello world, Dilion !";

$bezoeker = 2;
$pensioeneerden = 65;
$tieners = 12;
$peuters = 3;
$prijs = 10;
$busreis = "De standaard busreis kost 10 euro";

echo ($busreis) . "<br>";
echo ("Leeftijd van de bezoeker: ".$bezoeker) . "<br>";


if ($bezoeker >= $pensioeneerden) {
    echo ("Dit betalen gepensioeneerden: " . $prijs / 2) . " Euro" . "<br>";


}

if ($bezoeker >= $tieners && $bezoeker < $pensioeneerden) {
    echo ("Dit betalen tieners: " . $prijs / 2) . " Euro" . "<br>";


}

if ($bezoeker <= $peuters) {
    echo("Peuters zijn gratis");
}