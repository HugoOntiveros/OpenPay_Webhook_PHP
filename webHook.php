<?php

    // Permite la conexion desde cualquier origen
    header("Access-Control-Allow-Origin: *");
    
    // Permite la ejecucion de los metodos
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");

  
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        //recibes los datos
        $pedido = json_decode(file_get_contents("php://input"),true);
        $content    =   file_get_contents("php://input");
            //verificacion de la data enviada exista
        echo($content);
        if (isset($pedido) && !empty($pedido)) {
 
            

            header("HTTP/1.1 200 OK");
            //echo ''; respuesta
            exit();

        }else{
            header("HTTP/1.1 100 NO EXISTE DATA");

        }

    }

    //En caso de que ninguna de las opciones anteriores se haya ejecutado
    header("HTTP/1.1 400 Bad Request");