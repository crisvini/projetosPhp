<?php

    class operacoes{

        private float $primeiroNumero;
        private float $segundoNumero;

        public function __construct(float $primeiroNumero, float $segundoNumero){
            $this->primeiroNumero = $primeiroNumero;
            $this->segundoNumero = $segundoNumero;
        }
        
        public function getPrimeiroNumero(): float
        {
            echo $this->primeiroNumero . "<br>";
            return $this->primeiroNumero;
        }
        
        public function getSegundoNumero(): float
        {
            echo $this->segundoNumero . "<br>";
            return $this->segundoNumero;
        }
    }

?>