<?php


// Here we should ask the utils--> imagesValidation to validate the image if it pass upoladed on aws and save the url in DB 
// namespace imagesController;

// use name space for Aws 

class Images {

    private static $imagesName ; // associative array will act like a database
    // User Input Image Name => Server Generated Id For The Image 

    // private functions
    private function isImagesNameEmpty () {
        if ( !empty($imagesName) ) {
            return true ; //  
        }
        else {
            return false ;
        }
    }
    
     

    public function getImageByName ($userInputImageName) {

        //first check if there is a images uploaded
        if ( !$this->isImagesNameEmpty() ){
            throw new Exception("There is no images in the Database !") ; 
        }
        else {
            try {
                if ($imagesName[$userInputImageName] ){
                    // connnect to the aws and get the image by the value $imagesName[$userInputImageName]
                }
                else {
                    throw new Exception();
                }
            } catch (Exception $exception){
                throw new Exception ("There is no image with the given name !");
            }
        }
    }

    public function saveImage () {
        $extension = explode('/' , $_FILES["file"]["type"])[1];
        try {
            validateUserImage($extension); //validation
        } catch (Exception $exception){
            throw new Exception ( $exception->getMessage() );
        }
        $newImageName = uniqid();
        $imagesName[$_FILES['file']['name']] = $newImageName;

        try {
            
            $myBucket = new AwsS3bucket();
            $result = $myBucket->uploadImage($newImageName, $_FILES['file']['tmp_name']);

        }catch (Exception $exception){
            throw new Exception ( $exception->getMessage() );
        }
        return $result ;
    }
}