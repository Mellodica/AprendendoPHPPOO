
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
            //Alan Kay criador da POO...
            /*
            Objeto -TEM -       ATRIBUTO    -   CARACTERISTICAS
                    FAZ -       METODOS     -   COMPORTAMENTOS
                    COMO ESTA - ESTADO      -   ESTADO
             * 
            CLASSE: DEFINE OS ATRIBUTOS E METODOS COMUNS QUE SERÃO COMPARTILHADOS POR UM OBJETO;
            */ 
            require_once 'Caneta.php'; //Chmando a Classe
            $c1 = new Caneta(); //Instanciando Caneta
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->tampada = false;
              
            
            $c1->tampar();
            //$c1->rabiscar();
            var_dump($c1);
            echo"<br>";
            $c2 = NEW Caneta();
            $c2->cor = "Verde";
            $c2->ponta = 50;
            
            $c2->tampar();
            
            var_dump($c2);
            
            ?> 
            <br>
            <input type="submit" value="Analisar">
            </form>
         </div>
    </body>
</html>
