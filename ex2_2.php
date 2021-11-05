<?php

require 'main.php';
use \commandeapp\model\Carte as Carte;

$cartes = Carte::where('cumul', '>', 1000)->with('commandes')->get();
foreach ($cartes as $carte) {
    echo $carte."\n";
}