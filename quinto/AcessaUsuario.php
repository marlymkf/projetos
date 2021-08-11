<?php
require_once 'usuario.php';

class AcessaUsuario{
    function imprimeUsuario(){
        $usuario = new Usuario;
        echo $usuario->getNome()."<br>";
        echo $usuario->getCpf()."<br>";
        echo $usuario->getEndereco();
    }
}
?>