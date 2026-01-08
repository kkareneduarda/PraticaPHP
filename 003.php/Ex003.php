<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado da Conversão: </h1>
        <p>
            <?php
                $numero = (float) $_GET["num"];
                $conversao = $numero / 5.39;
                $valorDol = round($conversao, PHP_ROUND_HALF_UP);
            
                echo "O valor R$$numero equivale a aproximadamente: US$$valorDol dólares";
            ?>
        </p>
    </main>
</body>
</html>