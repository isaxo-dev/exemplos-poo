<?php
class Livro {

    public string $titulo;
    public string $autor;
    public ?int $paginas;

    public function __construct( string $valorDoTitulo, string $valorDoAutor, ?int $valorDoPaginas = null )
    {
        
        $this->titulo = $valorDoTitulo;
        $this->autor = $valorDoAutor;
        $this->paginas = $valorDoPaginas;

    }

    public function verificarTitulo():void {
        if( mb_strlen($this->titulo) < 3 ){
            echo "<p style='color:red'>
            Título não pode ter menos do que 3 letras</p>";
        }
    }

}


?>