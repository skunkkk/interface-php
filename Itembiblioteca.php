<?php

abstract class Itembiblioteca
{
    private string $titulo;
    private string $autor;
    private string $ano;

    public function __construct($titulo, $autor, $ano)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->ano = $ano;
    }

    abstract public function exibirDetalhes();

}

?>