<?php

$notaum = ($_POST['notaum']);
$notadois = ($_POST['notadois']);
$notatres = ($_POST['notatres']);
$media = ($notaum + $notadois + $notatres) / 3;


if($media < 5){
    echo "Sua média é " . round($media, 2) . ", logo, você tirou a menção I";
}
else if($media >= 5 and $media < 7){
    echo" Sua média é " . round($media, 2) . ", logo, você tirou a menção R ";
}
else if($media >= 7 and $media < 8){
    echo" Sua média é " . round($media, 2) . ", logo, você tirou a menção B ";
}
else if($media > 8){
    echo" Sua média é " . round($media, 2) . ", logo, você tirou a menção MB! Parabéns! ";
}
?>