<?php
require 'personne.php';
$taher=new personne ("Taher");

$taher->regenerer();

$sami=new personne("Sami");
$sami->vie = -20;
if($sami->mort()){
echo 'Sami est mort ';
}else{
echo 'Sami survécu' . $sami->vie;
}

$taher->attaque($sami;)
var_dump($taher);
var_dump($sami);

?>