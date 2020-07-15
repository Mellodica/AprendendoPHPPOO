<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/style.css"
        <title></title>
    </head>
    <body>
        <div>
            <pre>
        <?php
        // put your code here
        //CLASSE PESSOA
        /*
         * NOME
         * IDADE
         * SEXO
         * 
         * FAZERANIVER()
         */
        
        //CLASSE LIVRO
        /*
         * CLASSE LIVRO
         * TITULO
         * AUTOR
         * TOTPAGINAS
         * PAGINA ATUAL
         * ABERTO
         * LEITOR
         * 
         * DETALHES()
         * 
         * INTERFACE
         * PUBLICACAO
         * 
         * ABRIR()
         * FECHAR()
         * AVANÇARPAG()
         * VOLTARPAG()
         */
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        require_once 'iPublicacao.php';
        
        $P1 = new Pessoa("Helber", 36, Masculino);
        $P2 = new Pessoa("Heitor", 4, Masculino);
        $P3 = new Pessoa("Juliana", 31, Feminimo);
        
        $L1 = new Livro("Dear", "BobEsponja", 200, $P1);
        
        
        var_dump($L1);
        
        echo"<br>";
        
        $L1->detalhes();
        $L1->abrir();
        $L1->avancarPag();
        $L1->avancarPag();
        
        $L1->detalhes();
        $L1->quemLe();
        $P1->apresentar();
        
                
        
        
        
        
            ?>
        </pre>
        </div>
    </body>
</html>
