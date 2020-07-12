<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conta
 *
 * @author Helber
 */
class Conta {
    //put your code here
    //Cria uma Conta de Banco
    //CC ContaCorrente CP ContaPoupança
    //Status Bool
    //CC ganha 50 reais
    //CP ganha 150 reais
    //Para fechar conta, não pode ter dinheiro e não pode estar devendo.
    //Para Depositar a Conta Precisa estar aberta.
    //Para Sacar precisa ter dinheiro e a conta precisa estar aberta.
    //Pagar Mensalidade - cada vez que for chamado pagarmensalidade,
    //Cliente com CC paga 12 reais
    //Cliente com CP paga 20 reais
    //Construtor Status-False, Saldo-Zero
    
    public $numeroConta;
    protected $tipoConta;
    private $nome;
    private $saldo;
    private $status;
    
    
    
    
    public function Conta($nc, $tc, $n) {
        $this->setNome($n);
        $this->setNumeroConta($nc);
        $this->setTipoConta($tc);
        $this->abrirConta();
        
        
    }


    
    public function getNumeroConta() {
        return $this->numeroConta;
    }
    public function setNumeroConta($valor) {
        $this->numeroConta = $valor;
    }
    
    public function getTipoConta() {
        return $this->tipoConta;
    }
    public function setTipoConta($valor) {
         
        if($valor == "CP"){
            $this->tipoConta = "ContaPoupança";
        }elseif($valor == "CC"){
            $this->tipoConta = "ContaCorrente";
        }else{
            echo "ERRO: Os Tipos de Contas são CC ou CP";
        }
    }
    
    public function getNome() {
        return $this->nome;
    }
    public function setNome($valor) {
        $this->nome = $valor;
    }
    
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($valor){
        $this->saldo = $valor;
    }


    public function getStatus() {
        return $this->status;
    }
    public function setStatus($valor) {
        $this->status = $valor;
    }
    
    public function ativarConta() {
        $this->setStatus(true);
        
        if($this->tipoConta == "ContaPoupança"){
            //$this->saldo += 150.00;
            $this->depositarValor(150);
            echo "Conta número: ". $this->getNumeroConta()
                . "<br>Nome: " . $this->getNome()
                . "<br>Saldo: ". $this->getSaldo();
            
        }elseif($this->tipoConta == "ContaCorrente"){
            //$this->tipoConta += 50.00;
            $this->depositarValor(50);
            echo "Conta número: ". $this->getNumeroConta()
                . "<br>Nome: " . $this->getNome()
                . "<br>Saldo: ". $this->getSaldo();
        }      
    }
    public function fecharConta() {
        if($this->getStatus()){
            
            if($this->getSaldo() > 0){
                
                echo "Sua conta não pode ser fechada, devido a Valores, solicite sacar o total: R$ ";
                echo $this->getSaldo();
                
            }elseif($this->getSaldo() < 0){
                
                echo "Sua conta não pode ser fechada, porque há valores de débitos: R$ ";
                echo $this->getSaldo();
                
            }else/*($this->getSaldo() == 0)*/{
                
                echo "Sua Conta Foi fechada, com Sucesso!";
                $this->setStatus(false);
            }
        }
    }
    
       
    //Abrir Conta Construtor
    public function abrirConta() {
        $this->setStatus(false);
        $this->setSaldo(0);
              
    }
       

    public function depositarValor($valor) {
        if($this->getStatus()){
            //$this->saldo += $valor;
            $this->setSaldo($this->getSaldo()+$valor);
        }else{
            echo "O valor não pdoe ser depositado, pois sua conta não esta ativada";
        }
        
    }
    public function sacarValor($valor) {
        if(/*$this->status*/$this->getStatus()){
            
            if(/*$this->saldo*/$this->getSaldo() >= $valor){
                
                //$this->saldo -= $valor;
                $this->setSaldo($this->getSaldo() - $valor);
                echo"Sacado R$ ".$valor;                
                echo"<br>Saldo R$ ".$this->getSaldo();
                
            }else{
                
                echo "Saldo insuficiente!";
            }
        }else{
            echo "Depósito negado! Ative Sua Conta!";
        }
        
        return ($valor);
    }
    public function pagarMensalidade() {
        
        if(/*$this->status*/$this->getStatus()){
            
            if(/*$this->tipoConta*/$this->getTipoConta() == "ContaPoupança"){
                
                if($this->saldo >= 20.00){
                    
                    //return $this->saldo -= 20.00;
                    return $this->setSaldo($this->getSaldo() - 20.00);
                    
                }else{
                    
                    echo "Valor, insuficiente para mensalidade";
                }
            }
            if(/*$this->tipoConta*/$this->getTipoConta() == "ContaCorrente"){
                
                if($this->saldo >= 12.00){
                    
                    //return $this->saldo -= 12.00;
                    
                    return $this->setSaldo($this->getSaldo() - 12.00);
                    
                }else{
                    
                    echo "Valor, insuficiente para mensalidade";
                }
            }
                      
            echo "Conta Desativada, Ative para pagamento!";
        }
        
    }
    
    
}
