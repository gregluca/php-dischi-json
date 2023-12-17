<?php

// Prelevare dati dal file
$string = file_get_contents("dischi.json");


// Trasformiamo stringa in array
$list = json_decode($string, true);
//var_dump($list);

// Operazioni


// Trasformia array in stringa
$json = json_encode($list);


header("Content-Type: application/json");
echo $json;