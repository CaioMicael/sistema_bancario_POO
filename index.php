<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Bancário em POO</title>
</head>
<body>
    <h1>Gerenciamento de Contas bancárias</h1>
    <?php
        require_once 'classContaBancaria.php';
        $conta1 = new ContaBancaria();
        $conta1 -> setNumConta(101);
        $conta1 -> setDono("Teste");
        $conta1 -> setTipoConta(2);
        $conta1 -> abrirConta();
        $conta1 -> pagarMensal();
        //$conta1 -> depositar(10);
        //$conta1 -> sacar(130);
        //$conta1 -> fecharConta();
    ?>

    <pre>
        <?php print_r($conta1);
              var_dump($conta1); ?>
    </pre>
</body>
</html>