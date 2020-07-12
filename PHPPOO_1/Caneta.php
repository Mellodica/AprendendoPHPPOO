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
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
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
