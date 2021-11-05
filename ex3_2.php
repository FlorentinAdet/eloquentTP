<?php

require 'main.php';
use \commandeapp\model\Item as Item;

$items = Item::select()->with('commandes')->get();
foreach($items as $item){
    echo $item."\n\n\n";
}