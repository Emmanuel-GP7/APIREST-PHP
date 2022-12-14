<?php
    header('Access-control-Allow-Origin: http://localhost:4200');
    header("Access-control-Allow-Headers: X-API-KEY, Origin, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-control-Allow-Methods: DELETE");

    require_once "../models/Cliente.php";
    
    if(isset($_GET['id'])){
        if(Cliente::delete($_GET['id'])) {
            http_response_code(200);
        }//end if
        else {
            http_response_code(400);
        }//end else
    }//end if 
    else {
        http_response_code(405);
    }//end else