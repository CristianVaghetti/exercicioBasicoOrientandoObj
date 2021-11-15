<?php

class Pessoa {
    
    protected $nome;
    protected $idade;
    protected $sexo;

    function __construct($nome, $idade, $sexo){ 
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    public function fazerAniver() {
        $this->idade ++;
    }

    public function getNome(){
        return $this->nome;
    } 
}