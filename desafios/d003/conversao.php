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
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $real = $_GET["valor"];
            $dolar = round($real / 5.22, 2);
            echo "<p>Seus R$ " . strtr($real, '.', ',') . " equivalem a <strong>US$ " . strtr($dolar, '.', ',') . "</strong></p>";
            echo "<p><strong><small><small>*Cotação fixa de R$5,22</strong> informada diretamente no código.</small></small></p>";
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </section>
</body>
</html>