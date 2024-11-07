<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_REQUEST["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                echo "O número escolhidi foi <strong>$n</strong>";
                echo "<br>";
                echo "O seu <em>antecessor</em> é $a";
                echo "<br>";
                echo "O seu <em>sucessor</em> é $s";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
        <!-- outra forma - javascript:window.location.href='index.html' 
         Assim ele volta e carrega a página inicial, na forma que está no código ele volta a página
         e mantém o histórico do que foi escrito antes de avançar. -->
    </main>
</body>
</html>