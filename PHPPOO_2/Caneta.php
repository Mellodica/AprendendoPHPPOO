<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author Helber
 */

//Auto Referencia USANDO THIS
class Caneta {
    //put your code here
    private $modelo;
    private $cor;
    private $ponta;    
    private $tampada;
    
    //O nome do construtor pode ser dois underline ou o nome da Classe
                //   __construct ou Caneta
    public function Caneta($m, $c, $p) { //metodo Construtor
        $this->modelo = $m;
        $this->cor = $c;        
        $this->ponta = $p;
        $this->fechada();
    }
    public function getModelo() {
        return $this->modelo;
    }    
    public function setModelo($valor) {
        $this->modelo = $valor;
    }
    //--------------------------------------------------------------------
    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($valor) {
        $this->ponta = $valor;
    }
    
    public function fechada() {
        $this->tampada = true;
    }
    














































    public function rabiscar(){
        if ($this->tampada) {
            echo "<p>Erro, não é possivel escrever, Esta Tampada!";
        }else{
            echo"<p>Estou rabiscando!</p>";
        }
        
    }    
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
    
    public function helber(){
        echo"Helber";
    }
    
}
