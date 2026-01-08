<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04 - PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado da Conversão: </h1>
        <p>
            <?php
                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=100&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);

                $cotacao = $dados["value"][0]["cotacaoCompra"];

                $numero_Real = $_GET["num"];
                $numero_Dolar = $numero_Real / $cotacao;
                
                echo "O valor de R$" . number_format($numero_Real, 2, ",", ".") . " equivale a";
                echo " US$" . number_format($numero_Dolar, 2, ",", ".");
                
            ?>
        </p>
    </main>
</body>
</html>