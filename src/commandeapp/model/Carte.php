<?php
namespace commandeapp\model;

class Carte extends \Illuminate\Database\Eloquent\Model {

       protected $table      = 'carte';  /* le nom de la table */
       protected $primaryKey = 'id';     /* le nom de la clé primaire */
       public    $timestamps = true;    /* si vrai la table doit contenir
                                            les deux colonnes updated_at,
                                            created_at */
       public function commandes(){
              return $this->hasMany('commandeapp\model\Commande','carte_id');
       }
}