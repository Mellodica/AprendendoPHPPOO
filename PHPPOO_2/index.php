
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/style.css">
        <title>A2</title>
    </head>
    <body>
        <div>
          <form method="get" action="dados.php">
            <?php
            //VISIBILIDADE
            //+ PUBLICO
            //- PRIVADO
            //# PROTEGIDO
            
            /* PUBLICO - A CLASSE ATUAL E TODAS AS OUTRAS CLASSES TERÁ O ACESSO A ELA.*/
            /* PRIVADO - SOMENTE A CLASSE PODE FAZER ESSA MODIFICAÇÃO*/
            /* PROTEGIDO - SOMENTE A CLASSE E SUAS FILHAS (HERANÇAS) PODEM FAZER MODIFICAÇÃO*/
            //ENCAPSULAMENTO
            require_once 'Caneta.php';
           
            $c1 = new Caneta("BIC","AZUL", 0.5);
            $c3 = new Caneta("NIK", "VERMELHA", 0.7);
            //$c1->setModelo("BIC");
            //$c1->setPonta(0.5);
            
            var_dump($c1, $c3);
                            //interpollar com Blocos entre chaves
            //print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}."
            
            
            ?> 
            <br>
            <input type="submit" value="Analisar">
            </form>
         </div>
    </body>
</html>
