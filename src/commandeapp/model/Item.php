<?php
namespace commandeapp\model;

class Item extends \Illuminate\Database\Eloquent\Model {

       protected $table      = 'item';  /* le nom de la table */
       protected $primaryKey = 'id';     /* le nom de la clé primaire */
       public    $timestamps = false;    /* si vrai la table doit contenir
                                            les deux colonnes updated_at,
                                            created_at */
       public function commandes() {           
              return $this->belongsToMany('commandeapp\model\Commande','item_commande','item_id','commande_id');    
       }                                
}
