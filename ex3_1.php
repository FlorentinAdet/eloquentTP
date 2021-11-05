<?php

require 'main.php';
use \commandeapp\model\Commande as Commande;

$commande = Commande::find("00f117e3-7d98-47f2-ad34-bed0cbc14750");
$items = $commande->items;
foreach($items as $item){
    echo $item."\n";
}