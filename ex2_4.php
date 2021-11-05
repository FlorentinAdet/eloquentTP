<?php

require 'main.php';
use \commandeapp\model\Carte as Carte;
use \commandeapp\model\Commande as Commande;

$carte  = Carte::find(10);

$commande1 = new Commande();
$commande1->id = "ABCDEFG1";
$today = date("Y-m-d H:i:s");   
$commande1->date_livraison = $today;
$carte->commandes()->save($commande1);

$commande2 = new Commande();
$commande2->id = "ABCDEFG2";
$today = date("Y-m-d H:i:s");   
$commande2->date_livraison = $today;
$carte->commandes()->save($commande2);

$commande3 = new Commande();
$commande3->id = "ABCDEFG3";
$today = date("Y-m-d H:i:s");   
$commande3->date_livraison = $today;
$carte->commandes()->save($commande3);