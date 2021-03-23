<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body class="bg-gray-800">
    <center>
        <header class="max-w-lg">
            <h1 class="text-center mt-4 text-5xl bg-purple-500 p-2 rounded-lg text-white font-serif select-none focus:outline-none">
                Calculadora Simples</h1>
        </header>
    </center>
    <main>
        <center>
            <div class="mt-24 bg-purple-500 rounded-lg p-2 max-w-sm">
                <form action="" method="post">
                    <label class="text-white text-lg select-none">Primeiro Número:</label><br>
                    <input type="number" name="valor1" placeholder="Inserir" class="text-left pl-2 text-lg rounded-lg focus:outline-none"><br><br>
                    <label class="text-white text-lg select-none">Segundo Número:</label><br>
                    <input type="number" name="valor2" placeholder="Inserir" class="text-left pl-2 text-lg rounded-lg focus:outline-none"><br><br>
                    <div class="grid grid-cols-2">
                        <input type="submit" name="operacao" value="+" class="text-white bg-purple-700 hover:bg-purple-400 py-2 px-4 m-1 rounded-md font-bold text-2xl focus:outline-none select-none cursor-pointer">
                        <input type="submit" name="operacao" value="-" class="text-white bg-purple-700 hover:bg-purple-400 py-2 px-4 m-1 rounded-md font-bold text-2xl focus:outline-none select-none cursor-pointer">
                        <input type="submit" name="operacao" value="x" class="text-white bg-purple-700 hover:bg-purple-400 py-2 px-4 m-1 rounded-md font-bold text-2xl focus:outline-none select-none cursor-pointer">
                        <input type="submit" name="operacao" value="÷" class="text-white bg-purple-700 hover:bg-purple-400 py-2 px-4 m-1 rounded-md font-bold text-2xl focus:outline-none select-none cursor-pointer">
                    </div>
                </form>

                <?php

                require_once("calculo.php");
                ini_set('display_errors', 0);
                error_reporting(0);

                $valor1 = $_POST['valor1'];
                $valor2 = $_POST['valor2'];
                $operacao = $_POST['operacao'];

                if ($operacao == '+') {

                    $calculo = new calculo($valor1, $valor2);
                    $calculo->soma($valor1, $valor2);
                    $calculo->getResultado();
                } else if ($operacao == '-') {

                    $calculo = new calculo($valor1, $valor2);
                    $calculo->sub($valor1, $valor2);
                    $calculo->getResultado();
                } else if ($operacao == 'x') {

                    $calculo = new calculo($valor1, $valor2);
                    $calculo->mult($valor1, $valor2);
                    $calculo->getResultado();
                } else if ($operacao == '÷') {

                    $calculo = new calculo($valor1, $valor2);
                    $calculo->div($valor1, $valor2);
                    $calculo->getResultado();
                }

                ?>

            </div>
        </center>
    </main>
</body>

</html>