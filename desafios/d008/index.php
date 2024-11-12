<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8: Raízes de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_REQUEST["num"] ?? 0;
        $raiz2 = sqrt($num);
        $raiz3 = $num ** (1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o <strong>número <?=$num?></strong></p>
        <ul>
           <li>A sua raiz quadrada é <strong><?=number_format($raiz2, 3, ',', '.')?></strong></li>
           <li>A sua raiz cúbica é <strong><?=number_format($raiz3, 3, ',', '.')?></strong></li> 
        </ul>
    </section>
    <a href="/cursophp/desafios"><input type="button" value="Voltar Desafios"></a>
    <a href="/cursophp"><input type="button" value="Home"></a>
</body>
</html>