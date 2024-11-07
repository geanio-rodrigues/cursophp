<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2: Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header></header>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $num = rand(0, 100);
            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
            echo "<p>O valor gerado foi <strong>$num</strong></p>";
        ?>
        <a href="javascript:location.reload()"><input type="button" value="🔄 Gerar outro"></a>
    </section>
</body>
</html>