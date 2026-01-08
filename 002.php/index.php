<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Sorteador de númeos</h1>
        <?php 
            $nMin = 0;
            $nMax = 100;
            $num = mt_rand($nMin, $nMax);
            echo "Gerando um número aleatório entre 0 e 100... <br> O número sorteado foi $num";
        ?>
    </main>
</body>
</html>