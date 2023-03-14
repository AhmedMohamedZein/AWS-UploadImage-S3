<?php

// here we will manage the requests to the /images end-point

// use imagesController;

function imagesRoutes () {
    $imageObject = new Images ();
    switch ($_SERVER["REQUEST_METHOD"]) {
        
        case 'GET' : // You will get the image from the aws
            try {
               $data =  $imageObject->getImageByName('hello') ;
            }catch (Exception $exception) {
                throw new Exception ( $exception->getMessage() );
            }
            break;
        case 'POST' : // Here you will upload the photo using the imagesController  
            try {
                $imageObject->saveImage();
            }catch (Exception $exception){
                throw new Exception ( $exception->getMessage() );
            }
            break;
    } 

}