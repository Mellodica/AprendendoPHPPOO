<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author Helber
 */
class Pessoa {
    //put your code here
    private $nome;
    private $idade;
    private $sexo;
    
    
    public function Pessoa($Nome, $Idade, $Sexo) {
        
        $this->setNome($Nome);
        $this->setIdade($Idade);
        $this->setSexo($Sexo); 
        
    }
    
    
    public function getNome() {
        return $this->nome;
    }
    private function setNome($valor) {
        $this->nome = $valor; 
    }
    
    private function getIdade() {
        return $this->idade;
    }
    private function setIdade($valor) {
        $this->idade = $valor;
    }
    private function getSexo() {
        return $this->sexo;
    }
    private function setSexo($valor) {
        $this->sexo = $valor;
    }
    
    
    public function fazerAniversario() {
        $this->setIdade($this->getIdade() + 1);
    }
    public function apresentar() {
        echo "<br><br>A Pessoa é, ". $this->getNome().
        " Tem ". $this->getIdade()." anos!";
    }
}
