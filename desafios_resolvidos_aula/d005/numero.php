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
        <h1>Analisador de Número Real</h1>
        <?php 
            $numero = $_GET["numero"];
            $inteiro = floor($numero);
            $fracao = $numero - $inteiro;
            echo "<p>Analisando o número <strong>" . strtr($numero, '.', ',') . "</strong> informado pelo usuário:</p>";
            echo "<ul><li>A parte inteira do número é $inteiro</li><li>A parte fracionária do número é " . strtr($fracao, '.', ',') . "</li></ul>";
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </section>
</body>
</html> 