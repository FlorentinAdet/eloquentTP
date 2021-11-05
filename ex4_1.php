<?php

require 'main.php';
use \commandeapp\model\Carte as Carte;

$carte = Carte::where("nom_proprietaire","=","Aaron McGlynn")->first();
$commandes = $carte->commandes()->get();
foreach($commandes as $commande){
    echo $commande."\n";
}