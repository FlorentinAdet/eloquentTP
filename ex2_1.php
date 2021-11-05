<?php

require 'main.php';
use \commandeapp\model\Carte as Carte;

$c= Carte::find(42);
$commandes= $c->commandes()->get();
foreach ($commandes as $commande) {
    echo $commande."\n";
}
