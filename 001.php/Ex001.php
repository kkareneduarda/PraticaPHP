<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 01 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado: </h1>
        <p>
            <?php
                $numero = $_GET["num"];
                $antecessor = $numero - 1;
                $sucessor = $numero + 1;
                echo "O número escolhido foi: $numero <br> O seu antecessor é: $antecessor <br> O seu sucessor é: $sucessor ";
            ?>
        </p>
    </main>
</body>
</html>