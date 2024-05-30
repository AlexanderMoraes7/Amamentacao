<?php

class Procect{
    public function __construct(){
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION["nome"])) {
            die("Você não está autorizado a acessar essa página.<p><a href=\"index.html\">Logar</a></p>");
        }
    }
}