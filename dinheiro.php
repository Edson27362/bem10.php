<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="php.css">
    <title>RESULTADO</title>
    <style>
        h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>RESULTADO</h3>
    <?php
    // Recupera os dados informados nas caixas de texto e armazena nas variáveis
    $codigo = $_POST["codigo"];
    $nome_cliente = $_POST["nome_cliente"];
    $uf = $_POST["uf"];
    $cidade = $_POST["cidade"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $valor_despesa = $_POST["valor_despesa"];
    $descricao = $_POST["descricao"];

    // Calcula o aumento de 10% sobre o valor da despesa
    $aumento = $valor_despesa * 0.10;

    // Calcula o total com o aumento
    $total = $valor_despesa + $aumento;

    // Exibe os dados do formulário
    echo "Código..................: " .$codigo;
    echo "<br>Nome do Cliente...............: " .$nome_cliente;
    echo "<br>UF.................: " .$uf;
    echo "<br>Cidade................: " .$cidade;
    echo "<br>Email...............: " .$email;
    echo "<br>CPF..................: " .$cpf;
    echo "<br>Valor da Despesa................: " .$valor_despesa;
    echo "<br>Descrição..............: " .$descricao;
     echo "<br><br>Aumento de 10%.................: " .$aumento;
    echo "<br>Total................: " .$total;
    echo "<hr>";
    echo "<marquee behavior='alternate'>Desenvolvido por Édson Rafael Sousa Santos - &copy; 2024</marquee>";
    ?>
</body>
</html>

</div>


    
    
</body>
</html>