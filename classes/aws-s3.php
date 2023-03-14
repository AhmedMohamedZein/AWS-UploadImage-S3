<?php


use Aws\S3\S3Client;

class AwsS3bucket{

  private $MyBucket;

  public function __construct()
  {
    $this->connect();
  }

  private function connect(){
    $this->$MyBucket= S3Client::factory(array(
        'credentials' => array(
            'key' => _ACCESS_KEY_,
            'secret' => _SECRET_,
        ), 'region' => "us-east-1",
        'version' => 'latest'
    ));

  }

  public function uploadImage($imageName,$tempPath){ 
    
    try {
      $upload = $this->$MyBucket->putObject([
        'Bucket' => _S3_Bucket_,
        'Key'    => $imageName,
        'SourceFile' => $tempPath			
      ]);  
    }catch (Aws\S3\Exception\S3Exception $e) {
      throw new Exception ('There was an error uploading the file');
    }
    return $upload;
  }
}