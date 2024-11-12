<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10: Cálculo de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano_atual = date('Y');
        $anoNascimento = $_POST["anoNascimento"] ?? 0;
        $anoPesquisa = $_POST["anoPesquisa"] ?? $ano_atual;

        $idade = $anoPesquisa - $anoNascimento;
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="" method="post">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" value="<?=$anoNascimento?>">
            <label for="anoPesquisa">Quer saber sua idade em que ano? (atualmente estamos em <strong><?=$ano_atual?></strong>)</label>
            <input type="number" name="anoPesquisa" id="anoPesquisa" value="<?=$ano_atual?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h3>Resultado</h3>
        <p>Quem nasceu em <?=$anoNascimento?> vai ter <strong><?=$idade?> anos</strong> em <?=$anoPesquisa?>!</p>
    </section>
    <a href="/cursophp"><input type="button" value="Home"></a>
    <a href="/cursophp/desafios"><input type="button" value="Desafios"></a>
</body>
</html>