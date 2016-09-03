<?php

require_once 'require.php';

class Curso {
    
    private $id;
    private $nome;
    private $Coordenador;
    
    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCoordenador() {
        return $this->Coordenador;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCoordenador($Coordenador) {
        $this->Coordenador = $Coordenador;
    }

}
