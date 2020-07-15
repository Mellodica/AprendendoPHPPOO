<?php
//require_once 'iLutador';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lutador
 *
 * @author Helber
 */
class Lutador {
    //put your code here
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrota;
    private $empate;
    
    
    public function Lutador($Nome, $Nacao, $Idade, $Altura, $Peso, $Virotia, $Derrota, $Empate) {
        $this->setNome($Nome);
        $this->setNacionalidade($Nacao);
        $this->setIdade($Idade);
        $this->setAltura($Altura);
        $this->setPeso($Peso);
        $this->setVitorias($Virotia);
        $this->setDerrotas($Derrota);
        $this->setEmpates($Empate);
        
    }
    
    private function getNome() {
        return $this->nome;
    }
    private function setNome($valor){
        $this->nome = $valor;
    }
    
    private function getNacionalidade() {
        return $this->nacionalidade;
    }
    private function setNacionalidade($valor) {
        $this->nacionalidade = $valor;
    }
    
    private function getIdade() {
        return $this->idade;
    }
    private function setIdade($valor) {
        $this->idade = $valor;                
    }
    
    private function getAltura() {
        return $this->altura;
    }
    private function setAltura($valor) {
        return $this->altura = $valor;
    }
    
    private function getPeso() {
        return $this->peso;
    }
    private function setPeso($valor) {
        $this->peso = $valor;
        $this->setCategoria();
    }
    
    
    public function getCategoria() {
        return $this->categoria;
    }
    private function setCategoria() {
        //$this->categoria = $valor;
        
        if($this->getPeso() < 52.2){
            $this->categoria  = "INVALIDA";
            
        }elseif($this->getPeso() <= 70.3){
            $this->categoria = "LEVE";
            
        }elseif($this->getPeso() <= 83.9){
            $this->categoria = "MEDIO";
            
        }elseif ($this->getPeso() <= 120.2) {
        $this->categoria = "PESADO";
        
        }else{
            $this->categoria = "INVALIDA";
        }
        
        
    }
    
    private function getVitorias() {
        return $this->vitoria;
    }
    private function setVitorias($valor) {
        $this->vitoria = $valor;
    }
    
    private function getDerrotas() {
        return $this->derrota;
    }
    private function setDerrotas($valor) {
        $this->derrota = $valor;
    }
    
    private function getEmpates() {
        return $this->empate;
    }
    private function setEmpates($valor) {
        $this->empate = $valor;
    }
    
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }        
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    public function nome() {
        return $this->getNome();
    }
    
    public function apresentarLutador() {
        echo "<p>----------------------------</p>";
        echo "Lutador: ".$this->getNome();
        echo "<br>Origem: ".$this->getNacionalidade()."<br>";
        echo $this->getIdade()." anos<br>";
        echo $this->getAltura()."m de Altura";
        echo "<br>Pesando: ".$this->getPeso()."Kg<br>";
        echo "Categoria: ". $this->getCategoria();
        echo "<br>Ganhou: ".$this->getVitorias();
        echo "<br>Perdeu: ".$this->getDerrotas();
        echo "<br>Empatou: ".$this->getEmpates();
    }
    
    public function statusLutador() {
        echo "<p>--------------------------------</p>";
        echo $this->getNome();
        echo " é um peso ".$this->getCategoria().".<br>";
        echo "Com: ".$this->getVitorias()." vitórias ";
        echo $this->getDerrotas()." derrotas ";
        echo $this->getEmpates()." empates ";
    }
}
