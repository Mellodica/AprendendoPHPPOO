<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/style.css"
        <title></title>
    </head>
    <body>
        <div>
            <h3>RELACIONAMENTO ENTRA CLASSES</h3>          
        <pre>
        <?php
       /*LUTADOR
        * -------------------|
        * -NOME
        * -NACIONALIDADE
        * -IDADE
        * -ALTURA
        * -PESO
        * -CATEGORIA
        * -VITORIAS
        * -DERROTAS
        * -EMPATES
        * -------------------|
        * 
        * +APRESENTAR()
        * +STATUS()
        * +GANHALUTA()
        * +PERDERLUTA()
        * +EMPATARLUTA()
        */
        
        //CATEGORIA
        //-------------------|
        /*
         * PESO LEVE
         * PESO MEDIO
         * PESO PESADO
         * 
         * ------------------|
         */
        //require_once 'iLutador.php';
        //require_once 'iLutador.php';
     
     /*   $L = array(
                    array("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1),
                    array("Putscripts", "Brasil", 29, 1.68, 57.8, 14, 2, 3),
                    array("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1),
                    array("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2)
            );
       */ 
        require_once 'Lutador.php';
        require_once 'Luta.php';
        $L = array();
        $L[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
        $L[1] = new Lutador("Putscripts", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
        $L[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
        $L[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
        
        
        
        
        $L[1]->apresentarLutador();
        $L[0]->apresentarLutador();
        
        
        $L[0]->statusLutador();
        $L[1]->statusLutador();
        
        //AGREGAÇÃO
        /*
         * 
         */
        
        $UEC01 = new Luta();
        $UEC01->marcarLuta($L[1], $L[0]);
        $UEC01->lutar();
        $L[1]->statusLutador();
        $L[0]->statusLutador();
        
        
        
        
        
        
        ?>
        </div>
        </pre>
    </body>
</html>
