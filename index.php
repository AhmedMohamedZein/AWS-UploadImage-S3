<?php
require_once('vendor/autoload.php');


$method = $_SERVER["REQUEST_METHOD"];
$url_string = $_SERVER["REQUEST_URI"];
$url = explode('/' , $url_string);
$errors = [] ;

if ( !empty($url[3]) ) {

    switch ( $url[3] ) {
        case 'images' : 
            try {
                imagesRoutes();
            }
            catch (Exception $exception) {
                array_push($errors , $exception->getMessage() ); 
            }
        break;

        default : array_push($errors , "You don't have access on this Resourse") ;
            break;
    }

}



require_once('public/views/uploadForm.php');