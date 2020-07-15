<?php
require_once 'Lutador.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Luta
 *
 * @author Helber
 */
class Luta{
    //put your code here
    
    private $desafiado = Lutador;
    private $desafiante = Lutador;
    private $rounds;
    private $aprovada;
    
    private function getDesafiado() {
        return $this->desafiado;
    }

    private function getDesafiante() {
        return $this->desafiante;
    }

    private function getRounds() {
        return $this->rounds;
    }

    private function getAprovada() {
        return $this->aprovada;
    }

    private function setDesafiado($desafiado): void {
        $this->desafiado = $desafiado;
    }

    private function setDesafiante($desafiante): void {
        $this->desafiante = $desafiante;
    }

    private function setRounds($rounds): void {
        $this->rounds = $rounds;
    }

    private function setAprovada($aprovada): void {
        $this->aprovada = $aprovada;
    }
    
    private function vencedor() {
        return rand(0, 2);
    }

    public function marcarLuta($l1, $l2) {
        if($l1->getCategoria() === $l2->getCategoria() && $l1 != $l2){
            $this->aprovada =  true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }
    
    public function lutar() {
        if($this->getAprovada()){
             $this->desafiado->apresentarLutador();
             $this->desafiante->apresentarLutador();
             
            switch ($this->vencedor()){
                //Empatou
                case 0:
                    echo "<br><br><br><b>Empatou!!!</b> ";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();                    
                    break;
                
                //Ganhou Desafiado
                case 1:
                    echo "<br><br><br><b>Desafiado GANHOU!!! </b>";
                    $this->desafiado->nome();
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();                    
                    break;
                
                //Ganhou Desafiante
                case 2:
                    echo "<br><br><br><b>Desafiante GANHOU!!! </b>";
                    $this->desafiante->nome();
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();                    
                    break;
            }
        }else{
            echo "<br>Luta não pode acontecer!!!";
        }
    }
}
