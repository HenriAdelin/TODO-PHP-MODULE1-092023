<?php
include('fct/request.php');
include('config/app.php');
include('fct/item.php');
$intutile = post('intutile');

$items= getItems();//appell  function de récupation valeur item
//tabllau associative du valeur item
$items[uniqid()]=[
    'checked'=>false,
    'intutile'=>$intutile
];
saveItems($items);
//traitement nouvel Item
header('Location:index.php');
        