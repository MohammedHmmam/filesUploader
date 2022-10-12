<?php
namespace App\Models\Uploader;

final class ImageType{


    static private $_imageTypes = [

        'image/bmp',
        'image/cis-cod',
        'image/gif',
        'image/ief',
        'image/jpeg',
        'image/pipeg',
        'image/svg+xml',
        'image/tiff',
        'image/x-cmu-raster',
        'image/x-cmx',
        'image/x-icon',
        'image/x-portable-anymap',
        'image/x-portable-bitmap',
        'image/x-portable-graymap',
        'image/x-portable-pixmap',
        'image/x-rgb',
        'image/x-xbitmap',
        'image/x-xpixmap',
        'image/x-xwindowdump'
    ];

    //static function return the array of image types
    public static function typeList(){
        return self::$_imageTypes;
    }


}

?>