<?php
require_once("./Emprestavel.php");
final class Livro extends Itembiblioteca implements Emprestavel
{
    public string $editora;
    public string $genero;
    public int $isbn;

    public function __construct($editora, $genero, $isbn)
    {
        $this->editora = $editora;
        $this->genero = $genero;
        $this->isbn = $isbn;
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