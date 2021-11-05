<?php
namespace commandeapp\model;

class Commande extends \Illuminate\Database\Eloquent\Model {

       protected $table      = 'commande';  /* le nom de la table */
       protected $primaryKey = 'id';     /* le nom de la clé primaire */
       public $incrementing = false;
       protected $keyType = 'string';
       public    $timestamps = true;    /* si vrai la table doit contenir
                                            les deux colonnes updated_at,
                                            created_at */
       public function cartes(){
              return $this->belongsTo('commandeapp\model\Carte','carte_id');
       } 
       public function items() {
              return $this->belongsToMany('commandeapp\model\Item','item_commande','commande_id','item_id')->withPivot(['quantite']);   
       }
}
