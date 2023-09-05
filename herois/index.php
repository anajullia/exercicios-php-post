<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="resultado.php" method="post">

        Universo:<br>
        Marvel <input type="radio" id="radio" name="radio" value="1"> -
        DC <input type="radio" id="radio2" name="radio" value="2"><br>

        <label for="herois"> Escolha um herói: </label>

        <select name="herois" id="herois">
            <optgroup label="Marvel">
                <option value="Homem de Ferro">Homem de Ferro</option>
                <option value="Capitão América">Capitão América</option>
                <option value="Gavião Arqueiro">Gavião Arqueiro</option>
                <option value="Homem-Formiga">Homem-Formiga</option>
            </optgroup>
            <optgroup label="DC">
                <option value="Mulher-Maravilha">Mulher-Maravilha</option>
                <option value="Superman">Superman</option>
                <option value="Batman">Batman</option>
                <option value="Flash">Flah</option>
            </optgroup>
        </select><br>

        Quantas vezes você quer repetir esse herói?: <input type="text" name="quantidade"><br>
    
        <input type="submit">

    </form>

</body>
</html>