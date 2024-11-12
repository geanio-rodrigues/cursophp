<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12: Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $segundos = $_GET['segundos'] ?? 0;
    ?>

    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" min="0" value="<?=$segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <?php 
        $semana = intdiv($segundos, 604800);
        $segundo = $segundos % 604800;
        $dia = intdiv($segundo, 86400);
        $segundo = $segundo % 86400;
        $hora = intdiv($segundo, 3600);
        $segundo = $segundo % 3600;
        $minuto = intdiv($segundo, 60);
        $segundo = $segundo % 60;
    ?>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você diitou, <strong><?=$segundos?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dia?> dias</li>
            <li><?=$hora?> horas</li>
            <li><?=$minuto?> minutos</li>
            <li><?=$segundo?> segundos</li>
        </ul>
    </section>

    <a href="/cursophp"><input type="button" value="Home"></a>
    <a href="/cursophp/desafios"><input type="button" value="Desafios"></a>
</body>
</html>