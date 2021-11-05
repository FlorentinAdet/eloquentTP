<?php

require 'main.php';
use \commandeapp\model\Commande as Commande;
use \commandeapp\model\Item as Item;

$commande = Commande::find("ABCD-45RF-5567");
$item = Item::find(6);
$commande->items()->sync([6=>['quantite'=>5]]);
