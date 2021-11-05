<?php
require 'main.php';
use \commandeapp\model\Carte as Carte;

// affiche la carte N°7342
try {
    $lignes2 =  Carte::select()
                    ->where('id', '=', 7342)
                    ->firstOrFail();
} catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
  echo $e;
}
