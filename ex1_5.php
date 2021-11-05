<?php
require 'main.php';
use \commandeapp\model\Carte as Carte;

$c = new Carte();

$c->password = 'oui123';
$c->nom_proprietaire = 'Jean Marc';
$c->mail_proprietaire = 'JeanMarc@outlook.fr';
$c->cumul = 1952.25;
$c->save();
