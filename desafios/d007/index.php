<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7: Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // Padrão para internacionalização de moedas 
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $salario_minimo = 1412;
        $salario = $_GET["salario"] ?? 0;
        $total_salarios = floor($salario / $salario_minimo);
        $restante = $salario - ($total_salarios * $salario_minimo); 
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <h1>Informe seu salário</h1>
            <label for="salario">Salário</label>
            <input type="number" name="salario" id="salario" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong><?=numfmt_format_currency($padrão, $salario_minimo, 'BRL')?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Restultado Final</h2>
        <p>Quem recebe um salário de <?=numfmt_format_currency($padrão, $salario, 'BRL')?> ganha <strong><?=$total_salarios?> salários mínimos </strong>+ <?=numfmt_format_currency($padrão, $restante, 'BRL')?></p>
    </section>
    <a href='/cursophp/desafios'><input type="button" value="Home"></a>
</body>
</html>