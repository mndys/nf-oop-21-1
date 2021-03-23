<?php

include "src/Pokemon.php";
include "src/Pokemon/ElectricPokemon.php";
include "src/Pokemon/WaterPokemon.php";

use NeueFische\Pokemon\ElectricPokemon;
use NeueFische\Pokemon\WaterPokemon;

$pika = new ElectricPokemon("Pika");
$pika
    ->setType("electric")
    ->setHp(75);

$schiggy = new  WaterPokemon("Schiggy");
$pika->setType("water");

$schiggy->flee();

$pika->attack($schiggy);

// var_dump($pika);
// var_dump($schiggy);