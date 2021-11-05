<?php

require 'main.php';
use \commandeapp\model\Carte as Carte;
use \commandeapp\model\Commande as Commande;

$commande = Commande::find("0049915b-9c68-41f7-8414-acd707a30842");
$carte = Carte::find(11);
$commande->cartes()->associate($carte);
$commande->save();