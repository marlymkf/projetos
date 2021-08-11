<?php
// class Usuario{
//     public $nome;
//     public $cpf;
//     public $endereco;
//     function Usuario(){
//         $this->nome = "Marly";
//         $this->cpf = "12345678901";
//         $this->endereco = " Rua Professor, 123";
//     }
// }
?>
<?php
class Usuario{
    public    $nome;
    protected $cpf;
    private   $endereco;

    //contrutor da classe
    function Usuario(){
        $this->preparaUsuario();
    }
    private function preparaUsuario(){
        $this->nome = "Marly";
        $this->cpf = "12345678901";
        $this->endereco = " Rua Professor, 123";   
    }
    public function getCpf (){
        return $this->cpf;
    }
    public function getNome(){
        return $this->nome;
    }
    function getEndereco(){
        return $this->endereco;
    }
}
?>