<?php

    class conta{

        private $titular;
        private $saldo;
        private static $numeroDeContas = 0;

        public function __construct(titular $titular){
            $this->titular = $titular;
            $this->saldo = 0;

            self::$numeroDeContas++;
        }

        public function deposita($valor){
            
            if ($valor < 0) {
                echo "Valor precisa ser positivo";
                return;
            }

            $this->saldo += $valor;
            echo "Seu novo saldo após o depósito é de R$ " . number_format($this->saldo, 2, '.', '') . "<br>";

        }

        public function saca($valor){

            if ($valor > $this->saldo) {
                echo "Saldo indisponível";
                return;
            }

            $this->saldo -= $valor;
            echo "Seu novo saldo após o saque é de R$ " . number_format($this->saldo, 2, '.', '') . "<br>";

        }

        public function getSaldo(){

            return $this->saldo;

        }

        public function getTitular(){

            return $this->titular->getNome();

        }
        
        public function getCpf(){

            return $this->titular->getCpf();

        }
        
        public function getNumeroDeContas(){

            echo self::$numeroDeContas;
            return self::$numeroDeContas;

        }

    }

?>