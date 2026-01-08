<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 05 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real: </h1>
        <p>
            <?php
                $numero = $_GET["num"];
                $inteira = (int) $numero;
                $fracionaria = $numero - $inteira;
                echo "Analisando o número" . number_format($numero, 3, ",", ".") . " informado pelo usuário";
                echo "<br> ● A parte inteira é: " . number_format($inteira, 0, ",", ".");
                echo "<br> ● A parte fracionária é: " . number_format($fracionaria, 3, ",", ".");
                
            ?>
        </p>
    </main>
</body>
</html>