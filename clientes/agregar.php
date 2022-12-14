<?php
    header('Access-control-Allow-Origin: http://localhost:4200');
    header("Access-control-Allow-Headers: X-API-KEY, Origin, Content-Type, Accept, Access-Control-Request-Method");

    require_once "../models/Cliente.php";
    
    $datos = json_decode(file_get_contents('php://input'));
            if($datos != NULL) {
                if(Cliente::insert($datos->nombre, $datos->ap, $datos->am, $datos->fn, $datos->genero)) {
                    http_response_code(200);
                }//end if
                else {
                    http_response_code(400);
                }//end else
            }//end if
            else {
                http_response_code(405);
            }//end else
