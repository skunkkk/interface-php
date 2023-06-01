<?php
require_once("./Emprestavel.php");
final class Revista extends Itembiblioteca implements Emprestavel
{
    public string $editora;
    public string $numero;
    public string $periodicidade;

    public function __construct($editora, $numero, $periodicidade)
    {
        $this->editora = $editora;
        $this->numero = $numero;
        $this->periodicidade = $periodicidade;
    }
    public function exibirDetalhes()
    {

    }
    public function emprestar()
    {

    }
    public function devolver()
    {

    }

}

?>