<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
    </head>
    <body>
        <div>
        <?php
        //<link rel="stylesheet" href="_css/style.css">
        // put your code here
        //Jubileu e a Creusa
        //conta corrente e conta poupança
        //Jubileu - R$ 300 POUPANÇA
        //Creusa - R$ 500 CORRENTE - SACAR 100 REAIS
        //SACAR
        require_once 'Conta.php';
        
        $c1 = new Conta(001, "CP", "Helber Oliveira");
        
        var_dump($c1);
        
        $c1->ativarConta();
        echo "<br>";        
        var_dump($c1);
        echo"<br>";
        $c1->pagarMensalidade();
        echo"<br>";
        
        var_dump($c1);
        
        echo"<br>";
        
        $c2 = new Conta(002, "CC", "Heitor Oliveira");
        var_dump($c2);
        echo"<br>";
        $c2->ativarConta();
        var_dump($c2);
        $c2->pagarMensalidade();
        var_dump($c2);
        echo"Mensalidade paga<br>";
        $c2->sacarValor(100);
        echo"<br>";
        var_dump($c2);
        echo"<br>";
        
        $c1->fecharConta();
        
        echo"<br>";
        
        $c1->sacarValor(130);
        echo "<br>";
        $c1->fecharConta();
        
        var_dump($c1);
        
        
        
        ?>
        </div>
    </body>
</html>
