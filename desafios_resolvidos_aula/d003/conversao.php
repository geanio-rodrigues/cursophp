<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
            // Cotação do dia, obtida no Google
            $cotação = 5.69;

            // Trazendo o valor do formulário
            $real = $_REQUEST["din"];

            // Transformando o valor obtido em real, para dólar
            $dólar = $real / $cotação;

            // Formatação de moedas com internacionalização
            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p> Seus ". numfmt_format_currency($padrão, $real, "BRL") ." equilavem à <strong>". numfmt_format_currency($padrão, $dólar, "USD") ."</strong></p>";
            echo "<p><strong><small><small>*Cotação fixa de R$5,69</strong> informada diretamente no código.</small></small></p>";
        ?>
        <button onclick="javascript:hitory.go(-1)">Voltar</button>
    </main>
</body>
</html>