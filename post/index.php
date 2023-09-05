<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php" method="post">

        Nome: <input type="text" name="nome"><br>

        RadioBox 1: <input type="radio" id="radio" name="radio" value="1"><br>
        RadioBox 2: <input type="radio" id="radio2" name="radio" value="2"><br>

        Sócio torcedor?: <input type="checkbox" name="socio" value="sim"><br>

        <label for="historia">Porque você virou sócio?</label><br>

            <textarea id="historia" name="historia" rows="4" cols="50">
           
            </textarea>

            <br>

        <label for="times"> Escolha um time: </label>

        <select name="times">
            <option value="São Paulo">São Paulo</option>
            <option value="Santos">Santos</option>
            <option value="Palmeiras">Palmeiras</option>
            <option value="Corinthians">Corinthians</option>
        </select>

        <br>
        
        <input type="submit">
    </form>
</body>
</html>