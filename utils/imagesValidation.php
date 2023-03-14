<?php

// Here we will manage the validation of the image --> size , type of the file ... etc

function validateUserImage ($extension) {

    // check image extention and size 
    $size = $_FILES['file']['size'];
    if ( $extension != "jpeg" && $extension != "png" ) {
        throw new Exception ('You should only Upload .png or .jpeg images');
    }
    if ($size > 3*_MB_) {
        throw new Exception ('Your image size should be less than 3 MB');
    }
    
}