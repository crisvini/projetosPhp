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
            <h1 class="text-center mt-4 text-5xl bg-purple-500 p-2 rounded-lg text-white font-serif font-thin select-none">Calculadora Simples</h1>
        </header>
    </center>
    <main>
        <center>
            <div class="self-center grid grid-cols-3 mt-24 bg-purple-500 rounded-lg max-w-lg p-2">
                <input class="col-span-3 text-white text-right bg-gray-700 py-2 m-1 pr-2 rounded-md font-bold text-2xl focus:outline-none" placeholder="0"></input>
                <button class="col-start-1 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">1</button>
                <button class="col-start-2 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">2</button>
                <button class="col-start-3 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">3</button>
                <button class="col-start-1 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">4</button>
                <button class="col-start-2 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">5</button>
                <button class="col-start-3 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">6</button>
                <button class="col-start-1 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">7</button>
                <button class="col-start-2 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">8</button>
                <button class="col-start-3 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">9</button>
                <button class="col-start-1 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">+</button>
                <button class="col-start-2 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">-</button>
                <button class="col-start-3 bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md focus:outline-none select-none">
                    <center><img src="img/delete.png" alt="Deletar" width="24" height="24"></center>
                </button>
                <button class="col-start-1 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">x</button>
                <button class="col-start-2 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">÷</button>
                <button class="col-start-3 text-white bg-purple-700 hover:bg-purple-400 py-2 m-1 rounded-md font-bold text-2xl focus:outline-none select-none">=</button>
            </div>
        </center>
    </main>
</body>

</html>

<?php

require_once('src/operacoes.php');
$conta = new operacoes(1,2);
$conta->getPrimeiroNumero();

?>