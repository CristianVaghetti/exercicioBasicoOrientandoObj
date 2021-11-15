<?php
require_once 'src/Publicacao.php';
require_once __DIR__ . '/vendor/autoload.php';

// $livro = new Publicacao;
// var_dump($livro);
// $livro->avancarPag(1);
// $livro->folhar(1, 50);
// $livro->voltarPag(1);
// $livro->detalhes(1);

$pessoa1 = new Pessoa('Enzo', 21, 'M');
$livro1 = new Livro('Teoria da programação', 'Enzo Vaghetti', 500, $pessoa1);
$livro1->folhar(50);
$livro1->avancarPag();
$livro1->detalhes();








