<?php

$capital = ($_POST['capital']);
$taxapura = ($_POST['taxapura']);
$tempo = ($_POST['tempo']);
$taxacerta = ($taxapura/100);
$juros = ($capital * $taxacerta * $tempo);


echo "Seu juros ficou em R$" . $juros;

?>