<?php

$universo = $_POST["radio"];
$heroi = $_POST["herois"];
$qtd_heroi = $_POST["quantidade"];
if($universo == "DC"){
    if($heroi == "mulhermaravilha"){
        for($x=1;$x<=$qtd_heroi;$x++){
            echo "<img src='img/mulhermaravilha.webp'>";
        }
    }
    else if($heroi == "superman"){
        for($x=1;$x<=$qtd_heroi;$x++){
            echo "<img src='img/superman.webp'>";
        }
    }
    else if($heroi == "batman"){
        for($x=1;$x<=$qtd_heroi;$x++){
            echo "<img src='img/batman.webp'>";
        }
    }
    else if($heroi == "flash"){
        for($x=1;$x<=$qtd_heroi;$x++){
            echo "<img src='img/flash.webp'>";
        }
    }
    else if($heroi == "lanternaverde"){
        for($x=1;$x<=$qtd_heroi;$x++){
            echo "<img src='img/lanternaverde.webp'>";
        }
    }
    else{
        echo "O herói é inválido ou não pertence ao universo";
    }
}
else if($universo == "Marvel"){
if($heroi == "homemdeferro"){
    for($x=1;$x<=$qtd_heroi;$x++){
        echo "<img src='img/homemdeferro.webp'>";
    }
}
else if($heroi == "capitaoamerica"){
    for($x=1;$x<=$qtd_heroi;$x++){
        echo "<img src='img/capitaoamerica.webp'>";
    }
}
else if($heroi == "gaviaoarqueiro"){
    for($x=1;$x<=$qtd_heroi;$x++){
        echo "<img src='img/gaviaoarqueiro.webp'>";
    }
}
else if($heroi == "homemformiga"){
    for($x=1;$x<=$qtd_heroi;$x++){
        echo "<img src='img/homemformiga.webp'>";
    }
}
else if($heroi == "capitamarvel"){
    for($x=1;$x<=$qtd_heroi;$x++){
        echo "<img src='img/capitamarvel.webp'>";
    }
}
else{
    echo "O herói é inválido ou não pertence ao universo";
}
}
else{
echo "Universo inválido";
}


?>