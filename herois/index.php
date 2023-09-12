<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heróis</title>
</head>
<body>
    
    <form action="resultado.php" method="post">

        Universo:<br>
        Marvel <input type="radio" id="radio" name="radio" value="1"> -
        DC <input type="radio" id="radio2" name="radio" value="2"><br>

        <label for="herois"> Escolha um herói: </label>

        <select name="herois">
            <optgroup label="Marvel">
                <option value="homemdeferro">Homem de Ferro</option>
                <option value="capitaoamerica">Capitão América</option>
                <option value="gaviaoarqueiro">Gavião Arqueiro</option>
                <option value="homemformiga">Homem-Formiga</option>
                <option value="capitamarvel">Capitã Marvel</option>
            </optgroup>
            <optgroup label="DC">
                <option value="mulhermaravilha">Mulher-Maravilha</option>
                <option value="superman">Superman</option>
                <option value="batman">Batman</option>
                <option value="flash">Flash</option>
                <option value="lanternaverde">Lanterna Verde</option>
            </optgroup>
        </select><br>

        Quantas vezes você quer repetir esse herói?: <input type="text" name="quantidade"><br>
    
        <input type="submit">

    </form>

</body>
</html>