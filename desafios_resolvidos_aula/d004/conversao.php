<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            

            $cotacaoDolar = 5.76;
            $real = $_GET["valor"];
            $dolar = round($real / $cotacaoDolar, 2);
            echo "<p>Seus R$ ".strtr($real, '.', ',')." equivalem a <strong>US$ ".strtr($dolar, '.', ',')."</strong></p>";
            echo "<p><small><small>*Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong> </small></small></p>";
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </section>
</body>
</html>