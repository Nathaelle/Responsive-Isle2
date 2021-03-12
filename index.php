<?php

echo "Les dates en PHP";

$aujourdhui = new DateTimeImmutable("now", new DateTimeZone("europe/paris"));
var_dump($aujourdhui);

$deadline = $aujourdhui->modify("+ 2 month");
var_dump($deadline);

$deadlineBDD = $deadline->format("Y-m-d H:i");
var_dump($deadlineBDD);

$dateinscription = new DateTime("2021-02-15 16:52", new DateTimeZone("europe/paris"));
var_dump($dateinscription);

$interval = $aujourdhui->diff($dateinscription, false);
var_dump($interval);

if($interval->days < 30) {
    echo "Vous avez encore du temps...<br>";
    echo "Votre abonnement prendra fin le ".($dateinscription->modify("+ 30 days"))->format("d-m-Y");
} else {
    echo "Votre abonnement est dépassé !";
}



$code = "";

for($i = 0; $i < 8; $i++) {
    $code .= rand(0, 100);
}

$secret = substr(crypt($code, rand(10,1000)), 0, 8);
var_dump($secret);