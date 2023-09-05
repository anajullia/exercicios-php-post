<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultadoimc.php" method="post">

        <p>Bem-Vindo(a) a calculadora de juros simples!</p>

        Capital inicial: <input type="text" name="capital"><br>
        <p>Exemplo: 1372.99</p>

        Taxa de juros (em números inteiros): <input type="text" name="taxapura"><br>
        <p>Exemplo: Taxa de 2% ao mês = 2</p>

        Tempo da aplicação (em meses): <input type="text" name="tempo"><br>
        <p>Exemplo: 14 meses = 14</p>
        <br><br>
        <input type="submit">
    </form>
</body>
</html>