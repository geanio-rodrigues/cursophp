<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal 0b = binário 0 = octal
        $num = 0x1A;
        $num = 0b01011;
        $num = 010;
        echo "O valor da variável é $num";
        echo "<br>";

        $v = (int) 3e2; // 3 x 10² - Coerção
        echo "O valor é $num";
        echo "<br>";
        var_dump($v);
        echo "<br>";

        $num = (float) "950";
        var_dump($num);
        echo "<br>";

        $casado = true;
        var_dump($casado);
        echo "<br>";
        echo "O valor para casado é $casado";
        echo "<br>";
        // true boleano 1, false boleano null vazio

        $vet = [6, 2.5, "Maria", 3, false];
        // echo "O vetor é $vet"; erro de array to string conversion
        var_dump($vet);
        echo "<br>";

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p); // exemplo de object
        echo "<br>";
        // array e object são os dois tipos primitivos compostos
    ?>
</body>
</html>