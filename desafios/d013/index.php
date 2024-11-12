<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13: Simulando um Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
        $valorSaque = $_POST["valorSaque"] ?? 0;

        $moeda = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valorSaque">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valorSaque" id="valorSaque" step="5" value="<?=$valorSaque?>">
            <p><small><small>*Notas disponívies: R$ 100, R$ 50, R$20, R$10 e R$5</small></small></p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
        $notas100 = intdiv($valorSaque, 100);
        $saque = $valorSaque % 100;
        $notas50 = intdiv($saque, 50);
        $saque = $saque % 50;
        $notas20 = intdiv($saque, 20);
        $saque = $saque % 20;
        $notas10 = intdiv($saque, 10);
        $saque = $saque % 10;
        $notas5 = intdiv($saque, 5);
    ?>

    <section>
        <h2>Saque de <?=numfmt_format_currency($moeda, $valorSaque, 'BRL')?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="100-reais.jpg" width="150" height="80"> x <?=$notas100?></label></li>
            <li><img src="50-reais.jpg" width="150" height="80"> x <?=$notas50?></label></li>
            <li><img src="20-reais.jpg" width="150" height="80"> x <?=$notas20?></label></li>
            <li><img src="10-reais.jpg" width="150" height="80"> x <?=$notas10?></label></li>
            <li><img src="5-reais.jpg" width="150" height="80"> x <?=$notas5?></label></li>
        </ul>
    </section>
    <a href="/cursophp"><input type="submit" value="Home"></a>
    <a href="/cursophp/desafios"><input type="submit" value="Desafios"></a>
</body>
</html>