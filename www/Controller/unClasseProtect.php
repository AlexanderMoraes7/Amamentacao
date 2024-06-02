<?php

include_once("../View/imagens.php");

class Procect{
    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION["nome"])) {
            global $Mensagem; // Torna a variável global
            $Mensagem = "Você não está autorizado a acessar essa página.";
            header("Location:../View/index.html");
            exit();
        }
    }
}