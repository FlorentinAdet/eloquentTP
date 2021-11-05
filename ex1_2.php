<?php
 require 'main.php';
  use \commandeapp\model\Carte as Carte;
// Requête liste des cartes de fidélités nom / mail / montant trié par ordre décroissant
$requete = Carte::orderBy('nom_proprietaire', 'DESC')
            ->get();
foreach ($requete as $v){
      echo " Nom utilisateur : $v->nom_proprietaire, Mail : $v->mail_proprietaire, cumul : $v->cumul\n";
}
