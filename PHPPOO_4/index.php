<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="_css/style.css"
        <title></title>
    </head>
    <body>
        <div>
            <h3>Projeto Controle Remoto</h3>
            <pre>
        <?php
        //encapsulamento
        // Pilares da POO é EHP;
        /* A -> Abstração -> Pode ser considerada em alguns livros
         * E -> Encapsulamento 
         * H -> Herança
         * P -> Polimosfismo
         */
        //ENCAPSULAMENTO
        /* -INTERFACE -> LISTA DE SERVIÇOS FORNECIDOS POR UM COMPONENTE.
         * ...É O CONTATO COM O MUNDO EXTETIOR, QUE DEFINE O QUE PODE SER FEITO COM UM OBJETO DESSA CLASSE.
         * 
         * BENEFICIOS DO ENCASULAMENTO...
         * 1° -> TORNAR MUDANÇAS INVISIVEIS.
         * 2° -> FACILITAR A REUTILIZAÇÃO DO CÓDIGO.
         * 3° -> REDUZIR EFEITOS COLATERIAIS.
         */
        //INTERFACE NÃO TEM ATRIBUTO
        //METODO ABSTRATO -> TODOS METODO SÃO PUBLICOS
        /* <<interface>>
         *  Controlador
         * ----------------------|
         * +LIGAR()
         * +DESLIGAR()
         * +FECHARMENU()
         * +MAISVOLUME()
         * +MENOSVOLUME()
         * +LIGARMUDO()
         * +DESLIGARMUDO()
         * +PLAY()
         * +PAUSE()
         * ----------------------|
         */
        
        //CLASSE INTERFACE Controlador
        /* METODOS ABSTRATOS
         * publico abstrato Metodo ligar();
         * publico abstrato Metodo desligar();
         * publico abstrato Metodo abrirMenu();
         * publico abstrato Metodo fecharMenu();
         * publico abstrato Metodo maisVolume();
         * publico abstrato Metodo menosVolume();
         * publico abstrato Metodo ligarMudo();
         * publico abstrato Metodo desligarMudo();
         * publico abstrato Metodo play();
         * publico abstrato Metodo pause();
         * 
         */
        
        //----------------------------------------------------------------------
        
        
        
        //CLASSE ControleRemoto implementa Controlador
        //
        /*-----------------------|
         * - volume
         * - ligado
         * - tocando
         * ----------------------|
         * ----------------------|
         * -setVolume
         * -getVolume
         * -serLigado
         * -getLigado
         * -setTocando
         * -getTocando
         * 
         * +LIGAR()
         * +DESLIGAR()
         * +FECHARMENU()
         * +MAISVOLUME()
         * +MENOSVOLUME()
         * +LIGARMUDO()
         * +DESLIGARMUDO()
         * +PLAY()
         * +PAUSE()
         * ----------------------|
         * 
         */
        //----------------------------------------------------------------------
        require_once 'ControleRemoto.php';
        $c = new ControleRemoto();
        //$c->ligar();
        $c->maisVolume();
        $c->abrirMenu();
        
        
        
        
        
        
        ?>
        </div>
        </pre>
    </body>
</html>
