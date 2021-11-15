<?php

require_once 'src/Pessoa.php';

class Livro {
    protected $titulo;
    protected $autor;
    protected $totPaginas;
    protected $pagAtual;
    protected $aberto;
    protected $leitor;

    function __construct($titulo, $autor, $totPaginas, $leitor){ 
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

    public function detalhes(){
        echo "Titulo: ".$this->titulo.
        "\nEscrito por: ".$this->autor.
        "\nLeitor: ".$this->leitor->getNome().
        "\nPágina atual: ".$this->pagAtual.
        "\nTotal de páginas: ".$this->totPaginas."\n";
    }

    public function abrir(){
        $this->aberto = true;
    }

    public function fechar(){
        $this->aberto = false;
    }

    public function avancarPag(){
        if($this->pagAtual < $this->totPaginas)
            $this->pagAtual ++;
        else $this->pagAtual = "Terminou!";
    }

    public function voltarPag(){
        if($this->pagAtual != 0)
            $this->pagAtual --;
    }

    public function folhar($pag) {
        if($this->totPaginas < $pag) {
            $this->pagAtual = 0;
        }
        $this->pagAtual = $pag;
    }





}