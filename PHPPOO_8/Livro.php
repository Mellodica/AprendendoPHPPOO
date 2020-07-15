<?php
require_once 'Pessoa.php';
require_once 'iPublicacao.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Livro
 *
 * @author Helber
 */
class Livro implements iPublicacao{
    //put your code here
    
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor = Pessoa;
    
    public function Livro($Titulo, $Autor, $Tot, $Leitor ) {
        
        $this->setTitulo($Titulo);
        $this->setAutor($Autor);
        $this->setTotalPaginas($Tot);
        $this->setAberto(false);
        $this->setAtual(0);
        $this->setleitor($Leitor);
    }
    
    private function getTitulo() {
        
        return $this->titulo;
    }
    private function setTitulo($valor) {
        
        $this->titulo = $valor;
    }
    
    private function getAutor() {
        
        return $this->autor;
    }
    private function setAutor($valor) {
        $this->autor = $valor;
    }
    
    private function getAtual() {
        return $this->pagAtual;
    }
    private function setAtual($valor) {
        $this->pagAtual = $valor;
    }
    
    private function getAberto() {
        return $this->aberto;
    }
    private function setAberto($valor) : void{
        $this->aberto = $valor;
    }
    private function getTotalPaginas() {
        return $this->totPaginas;
    }
    private function setTotalPaginas($valor) {
        $this->totPaginas = $valor;
    }
    
    
    private function getLeitor() {
        return $this->leitor;
    }
    private function setleitor($valor) {
        $this->leitor = $valor;
    }
    
    
    public function detalhes() {
        
        echo "<br><br>O título do livro é: ".$this->getTitulo();
        echo "<br>O Autor da obra é: ".$this->getAutor();
        echo "<br>Esse livro tem ".$this->getTotalPaginas();
        echo "<br>Atualmente a pagina de leitura é ". $this->getAtual();
        
    }

    public function abrir() {
        
        $this->setAberto(true);
        
    }

    public function avancarPag() {
        
        if($this->getAberto() && $this->getAtual() <= $this->getTotalPaginas()){
            $this->setAtual($this->getAtual() + 1);
            echo "<br><br>Próxima Página ".$this->getAtual();
        }else{
            echo"O Livro esta fechado!";
        }
        
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear() {
        
    }

    public function voltarPag() {
        if($this->getAberto() && $this->getAtual() != 0){
            $this->setAtual($this->getAtual() - 1);
            echo "<br><br>Página ". $this->getAtual();
        }
    }

    public function quemLe() {
        echo "<br>O Leitor é: ". $this->leitor->getNome();
        echo "<br>";
    }

}
