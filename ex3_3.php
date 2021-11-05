<?php

require 'main.php';
use \commandeapp\model\Commande as Commande;

$commandes = Commande::where("nom_client","=","Aaron McGlynn")->get();
foreach ($commandes as $commande) {
    echo $commande->id." :\n";
    $itemsCo = $commande->items;
    foreach($itemsCo as $itemCo){
        echo  $itemCo->libelle." : ".$itemCo->pivot->quantite."\n\n";
    }
}
