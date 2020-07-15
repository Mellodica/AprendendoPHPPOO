<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleRemoto
 *
 * @author Helber
 */

require_once 'Controlador.php';
class ControleRemoto implements Controlador{
    //put your code here
    private $volume;
    private $ligado;
    private $tocando;
    
    
    public function ControleRemoto() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    
    private function getVolume(){
        return $this->volume;
    }
    private function setVolume($valor) {
        $this->volume = $valor;
    }
    
    private function getLigado() {
        return $this->ligado;
    }
    private function setLigado($valor){
        $this->ligado = $valor;
    }
    
    private function getTocando(){
        return $this->tocando;
    }
    private function setTocando($valor){
        $this->tocando = $valor;
    }

    public function abrirMenu() {
        echo "<br>Está ligado: ".($this->getLigado() ? "SIM" : "NÃO");
        echo "<br>Está tocando: ".($this->getTocando() ? "SIM" : "NÃO");
        echo "<br> Volume: ". $this->getVolume();
        for($i=0; $i <= $this->getVolume(); $i+=10){
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu() {
        echo "Fechando Menu...";
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }
     public function ligarMudo() {
        if($this->getLigado() && $this->getVolume() > 0){
            $this->getVolume(0);
        }
    }
    

    public function ligar() {
        $this->setLigado(true);
    }

   

    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function pause() {
        
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

    public function play() {
        
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(true);
        }
    }

}
