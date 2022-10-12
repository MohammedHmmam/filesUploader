<?php
namespace App\Models\Uploader;

use App\Models\Uploader\ImageType;
use App\Models\Uploader\IUpload;
class UploadFile{

    private $_file = [];
    
    private $_uploadedFile ;


    public function __construct($file = [])
    {
        //check file type
        //if image create new object of image
        // if pdf create new object of pdf
        $this->_file = $file;
        if(empty($this->_file)){
            echo "no file";
        }
        //check if the uploaded file is image
        if(in_array($this->_file['type'],ImageType::typeList())){

            $this->_uploadedFile = new UploadImage($this->_file);
            $this->_uploadedFile->upload();
        }


    }


}

?>