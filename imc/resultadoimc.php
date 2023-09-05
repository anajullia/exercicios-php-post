<?php

$peso = ($_POST['peso']);
$altura = ($_POST['altura']);
$alturaquadrado = $altura * $altura;
$imc = ($peso / $alturaquadrado);


if($imc < 17){
    echo "Seu IMC é $imc, oque é muito abaixo do peso ideal";
}
else if($imc >= 17 and $imc <= 18.49){
    echo "Seu IMC é " . round($imc,2) . ", oque é abaixo do peso ideal";
}
else if($imc >= 18.50 and $imc <= 24.99){
    echo "Seu IMC é " . round($imc,2) . ", oque é o peso ideal";
}
else if($imc >= 25 and $imc <= 29.99){
    echo "Seu IMC é " . round($imc,2) . ", oque é acima do peso";
}
else if($imc >= 30 and $imc <= 34.99){
    echo "Seu IMC é " . round($imc,2) . ", oque é obesidade I";
}
else if($imc >= 35 and $imc <= 39.99){
    echo "Seu IMC é " . round($imc,2) . ", oque é obesidade II (severa)";
}
else if($imc > 40){
    echo "Seu IMC é " . round($imc,2) . ", oque é obesidade III (mórbida)";
}
?>