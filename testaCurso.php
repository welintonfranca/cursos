<?php
include 'vendor/autoload.php';

$c = new App\Model\Curso();
$c->setId(1);
$c->setNome("Programação PHP");
$c->setValor(300,00);

$cDAO = new App\DAO\CursoDAO();
$cDAO->inserir($c);

echo $c->getNome() . " - " . $c->getValor();