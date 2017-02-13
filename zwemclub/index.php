<?php
/**
 * Created by PhpStorm.
 * User: gebruiker
 * Date: 12-2-2017
 * Time: 21:34
 */

$zwemmers["Spartelkuikens"] = 25;
$zwemmers["Waterbuffels"] = 32;
$zwemmers["Plonsmderin"] = 11;
$zwemmers["Bommetje"] = 23;

foreach ($zwemmers as $zwemclubs => $waardes) {
    echo "De zwemclub: " . $zwemclubs . "," . " Ledenaantal: " . $waardes."<br>";

    for ($i = 5; $i <= $waardes; $i += 5){



        ?>

        <img src="img/zwemmer.png">
        <br>



        <?php


    }


}










