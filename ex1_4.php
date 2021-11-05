<?php
require 'main.php';
use \commandeapp\model\Carte as Carte;

$requete = Carte::where('nom_proprietaire', 'like', '%Ariane%')
                ->orderBy('nom_proprietaire', 'ASC')
                ->get();
foreach ($requete as $v){
      echo "<br> Nom utilisateur : $v->nom_proprietaire, Mail : $v->mail_proprietaire, cumul : $v->cumul\n";
}
