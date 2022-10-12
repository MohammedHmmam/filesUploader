<?php
namespace App\Models\Uploader;

interface IUpload{

    //Check the file size
     public function checkFileSize();

     //Generate new Filename
     public function generateFileName();

     //Move The File to its Type Directory (image - pdf - docs - sheets)
     public function upload();
}




?>