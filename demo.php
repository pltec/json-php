<?php
    /*Exemplo de uso da classe*/
    include('Json.php');
    
    $file = 'app.json';

    $json = new Json($file);

    $dados = $json->get('Players');
    $dados = $dados['list'];

    foreach($dados as $id){
         echo $id;
         echo '<br>';
    }
