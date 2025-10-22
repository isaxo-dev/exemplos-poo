<?php
class Livro {

    public string $titulo;
    public string $autor;
    public int $paginas;

    public function __construct( string $valorDoTitulo, string $valorDoAutor, ?int $valorDoPaginas = null )
    {
        
        $this->titulo = $valorDoTitulo;
        $this->autor = $valorDoAutor;
        $this->paginas = $valorDoPaginas;

    }

}


?>