<?php 
include('fct/item.php');
include('fct/request.php');
include('config/app.php');
$items = getItems();
$id=post('editItem');
$items[$id]['intutile']=post('intutile');
saveItems($items);

header('Location:index.php');