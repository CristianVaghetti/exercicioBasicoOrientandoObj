<?php
require_once 'src/Livro.php';
require_once 'src/Pessoa.php';
class Publicacao {

    function __construct(){
        
        $this->livros = [
            new Livro('A procura', 'Cristian Vaghetti', 270, new Pessoa('Ana', 26, "F") ),
            new Livro('Depois que achei', 'Cristian Vaghetti', 365, new Pessoa('Mano', 27, "M")),
            new Livro('Perdi novamente', 'Cristian Vaghetti', 280, new Pessoa('Veri', 25, "F"))
        ];
    }

    public $livros;

    public function abrir($id){
        $this->livros[$id]->abrir();
    }

    public function fechar($id){
        $this->livros[$id]->fechar();
    }

    public function detalhes($id){
        $this->livros[$id]->detalhes();
    }

    public function avancarPag($id){
        $this->livros[$id]->avancarPag();
    }

    public function voltarPag($id){
        $this->livros[$id]->voltarPag();
    }

    public function folhar($id, $pag) {
        $this->livros[$id]->folhar($pag);
    }
    
}