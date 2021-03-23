<?php

class titular{
 
    private $cpf;
    private $nome;

    public function __construct(string $cpf, string $nome){
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        echo $this->cpf . "<br>";
        return $this->cpf;
    }

    public function getNome(): string
    {
        echo $this->nome . "<br>";
        return $this->nome;
    }

}

?>