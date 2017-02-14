<?php
/**
 * Created by PhpStorm.
 * User: gebruiker
 * Date: 13-2-2017
 * Time: 20:35
 */

$legePlek = "";

$kappersagenda["9.15"] = "Mevr.Pietersen";
$kappersagenda["9.30"] = "Mevr.Willems";
$kappersagenda["9.45"] = $legePlek;
$kappersagenda["10.00"] = "Paul van de Broek";
$kappersagenda["10.15"] = "Karel de Meeuw";
$kappersagenda["10.30"] = $legePlek;

foreach ($kappersagenda as $tijden => $klanten) {


    for ($i = 0; $i < $tijden; $i++) {


    }

    if ($klanten == $legePlek) {
        echo "Deze tijd is beschikbaar: ";

        print("<li>" . $tijden . "</li>");
    }




}




