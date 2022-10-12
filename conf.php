<?php

//this file created for uploading configuration


//-- Any file type need to create directory in uploaded_files  Directory




//main download directory
const UPLOADED_FILES = 'uploaded_files'.DIRECTORY_SEPARATOR;

if(!file_exists(UPLOADED_FILES)){
    mkdir('uploaded_files',0777);
}


//images directory
const IMAGES_PATH = UPLOADED_FILES.'images'.DIRECTORY_SEPARATOR;

if(!file_exists(IMAGES_PATH)){
    mkdir(IMAGES_PATH,0777);
}

//PDF Directory
const PDF_PATH = UPLOADED_FILES . 'pdf'.DIRECTORY_SEPARATOR;

if(!file_exists(PDF_PATH)){
    mkdir(PDF_PATH,0777);
}

//Excel sheets directory
const EXCEL_PATH = UPLOADED_FILES . 'excelsheet'.DIRECTORY_SEPARATOR;

if(!file_exists(EXCEL_PATH)){
    mkdir(EXCEL_PATH,0777);
}




?>