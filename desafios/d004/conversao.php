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
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            // Pegando data atual e 7 dias antes, para puxar a cotação do dólar diretamente da API do banco central
            $inicio = date("m-d-Y", strtotime("-7 dias"));
            $fim = date("m-d-Y");

            // Cotação vinda da API do Banco Central
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true); // opção true, para colocar os dados em array
            $cotacaoDolar = $dados["value"][0]["cotacaoCompra"];
            $real = $_GET["valor"];
            $dolar = $real / $cotacaoDolar;

            // Criando um padrão para internacionalização de moedas
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);


            echo "<p>Seus R$ ". numfmt_format_currency($padrao, $real, "BRL") ." equivalem a <strong>US$ ". numfmt_format_currency($padrao, $dolar, "USD") ."</strong>*</p>";
            echo "<p><small><small>*Cotação: ". numfmt_format_currency($padrao, $cotacaoDolar, "BRL") ." obtida diretamente do site do <strong><a href='https://dadosaberts.bcb.gov.br'>Banco Central do Brasil</strong></a></small></small></p>";
        ?>
        <a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a>
    </section>
</body>
</html>