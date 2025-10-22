<?php
class Cliente {
    public string $nome;
    public int $idade;
    public string $email;

    /* Método construtor: responsável por 'construir' um objeto COM seus dados no momento da criação */
    public function __construct( string $ValorDoNome, int $ValorDaIdade, string $ValorDoEmail ) {
        
        /* Atribuindo os valores recebidos através dos parâmetros do construtor, aos atributos da classe */
        $this->nome = $ValorDoNome;
        $this->idade = $ValorDaIdade;
        $this->email = $ValorDoEmail;
    }
    

}
