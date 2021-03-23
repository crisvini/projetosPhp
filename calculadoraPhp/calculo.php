<?php

class calculo
{

    public $resultado;

    public function __construct(float $resultado)
    {

        $this->resultado = $resultado;
    }

    public function soma($valor1, $valor2): void
    {

        $this->resultado = $valor1 + $valor2;
    }

    public function sub($valor1, $valor2): void
    {

        $this->resultado = $valor1 - $valor2;
    }

    public function mult($valor1, $valor2): void
    {

        $this->resultado = $valor1 * $valor2;
    }

    public function div($valor1, $valor2): void
    {

        $this->resultado = $valor1 / $valor2;
    }

    public function getResultado(): float
    {
?>
        <html lang="en">

        <head>
            <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>
            <div class="text-white rounded-lg bg-gray-700 py-2 font-bold">
                <?php
                echo "Resultado: " . number_format($this->resultado, 2, ',', '') . "<br>";
                return $this->resultado;
                ?>
            </div>
        </body>

        </html>
<?php
    }
}

?>