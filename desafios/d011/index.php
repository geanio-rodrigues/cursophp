<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11: Reajustando preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $preco = $_POST["preço"] ?? 0;
        $percentual = $_POST["percentualAumento"] ?? 0;

        $moeda = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $aumento = $preco * ($percentual / 100);
        $preco_final = $preco + $aumento;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="preço">Preço do Produto (R$)</label>
            <input type="number" name="preço" id="preço" step="0.01" value="<?=$preco?>">
            
            <label for="percentualAumento">Qual será o percentual de reajuste? (<strong><span id="percentualDisplay"><?=$percentual?></span>%</strong>)</label>
            <input type="range" name="percentualAumento" id="percentualAumento" min="0" max="100" step="1" oninput="mostrarValor()" value="<?=$percentual?>">

            <button type="submit">Reajustar</button>
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <?=numfmt_format_currency($moeda, $preco, 'BRL')?>, com <strong><?=$percentual?>% de aumento</strong> vai passar a custar <strong><?=numfmt_format_currency($moeda, $preco_final, 'BRL')?></strong> a partir de agora.</p>
    </section>
    <a href="/cursophp"><input type="button" value="Home"></a>
    <a href="/cursophp/desafios"><input type="button" value="Desafios"></a>

    <script>
        function mostrarValor () {
            percentualDisplay.innerText = percentualAumento.value;
        }
    </script>
</body>
</html>