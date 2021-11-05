<?php
require 'main.php';

use \commandeapp\model\Carte as Carte;
 //Requête liste des cartes de fidélités nom / mail / montant
$requete = Carte::select();
$lignes = $requete->get();
foreach ($lignes as $v){
      echo "<br> Nom utilisateur : $v->nom_proprietaire, Mail : $v->mail_proprietaire, cumul : $v->cumul\n";
}

 ?>
