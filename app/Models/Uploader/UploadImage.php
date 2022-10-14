<?php
namespace App\Models\Uploader;
require_once dirname(dirname(dirname(dirname(__FILE__)))).'/vendor/autoload.php';

class UploadImage implements IUpload{

    private int $_AllowedSize = 900000;
    private $_file = [];


    public function __construct($file = [])
    {
        
        $this->_file = $file;


    }


     //Check the file size
     public function checkFileSize(){
        if($this->_file['size'] > $this->_AllowedSize){
            return false;
        }
        return true;
     }

     //Generate new Filename
     public function generateFileName(){
        return date('dmy_H_i_s') . ' _image_' . random_int(0,2000).'.'. pathinfo($this->_file['name'],PATHINFO_EXTENSION);
     }

     //Move The File to its Type Directory (image - pdf - docs - sheets)
     public function upload(){
        
        if($this->checkFileSize()){

            if(move_uploaded_file($this->_file['tmp_name'],IMAGES_PATH.$this->generateFileName())){
                return true;
            }
            return false;

        }else{
            return false;
        }

     }


}



?>