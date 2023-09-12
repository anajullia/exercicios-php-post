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
if($heroi == "Rocket"){
    for($x=1;$x<=$qtd_heroi;$x++){
        echo "<img src='img/Rocket.jpg'>";
    }
}
else if($heroi == "Homem de Ferro"){
    for($x=1;$x<=$qtd_heroi;$x++){
        echo "<img src='img/Homem de ferro.jpg'>";
    }
}
else if($heroi == "Capitao america"){
    for($x=1;$x<=$qtd_heroi;$x++){
        echo "<img src='img/Capitao america.jpg'>";
    }
}
else if($heroi == "Capita marvel"){
    for($x=1;$x<=$qtd_heroi;$x++){
        echo "<img src='img/Capita marvel.jpg'>";
    }
}
else if($heroi == "Homen aranha"){
    for($x=1;$x<=$qtd_heroi;$x++){
        echo "<img src='img/Homen aranha.png'>";
    }
}
else{
    echo "Não é válido";
}
}
else{
echo "Não é valido";
}


?>