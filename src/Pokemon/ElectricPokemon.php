<?php

namespace NeueFische\Pokemon;

use NeueFische\Pokemon;

class ElectricPokemon extends Pokemon
{
    public function attack(Pokemon $pokemon): void
    {
        echo "blitz blitz";
        $pokemon->hp -= 10;
    }
}