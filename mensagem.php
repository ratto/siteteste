<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Mensagem {
    private $nome;
    private $email;
    private $telefone;
    private $texto;
    
    function getNome(){
        return $this->nome;
    }
    
    function getEmail(){
        return $this->email;
    }
    
    function getTelefone(){
        return $this->telefone;
    }
    
    function getTexto(){
        return $this->texto;
    }
    
    function setNome($nome){
        $this->nome = $nome;
    }
    
    function setEmail($email){
        $this->email = $email;
    }
    
    function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    
    function setTexto($texto){
        $this->texto = $texto;
    }
}
