<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Helber
 */
interface iPublicacao {
    //put your code here
    
    
    public function abrir();
    public function fechar();
    public function folhear();
    public function avancarPag();
    public function voltarPag();
    public function quemLe();
    
}
