<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    
</body>
</html>

<?php

require_once('titular.php');
require_once('conta.php');

$cristian = new titular("444.252.888-82", "Cristian");
$primeiraConta = new conta($cristian);
$primeiraConta->deposita(5000);
$primeiraConta->saca(1000);
$primeiraConta->getNumeroDeContas();

$barbara = new titular("111.222.333-44", "Bárbara");
$segundaConta = new conta($barbara);
$segundaConta->deposita(5000);
$segundaConta->saca(2000);
$segundaConta->getNumeroDeContas();

?>