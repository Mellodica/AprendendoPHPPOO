
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
            
            $c1 = new Caneta();
            $c1->modelo = "Bic Cristal";
            $c1->cor = "Azul";
            
            //chamar objeto instanciado para acessar metodo.
            $c1->tampar();
            var_dump($c1);
            
            //METODOS ESPECIAIS
            
            
            
            ?> 
            <br>
            <input type="submit" value="Analisar">
            </form>
         </div>
    </body>
</html>
