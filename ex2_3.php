<?php

require 'main.php';
use \commandeapp\model\Carte as Carte;
use \commandeapp\model\Commande as Commande;

$commandes = Commande::whereNotNull('carte_id')->with('cartes')->get();
foreach($commandes as $commande){
    echo $commande."\n"."\n";
}
