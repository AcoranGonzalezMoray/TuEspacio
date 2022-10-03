<?php

$path= 'D:\ANM\user\contents/'.$_SESSION['Name-User'];
/********************************************************************************/
/*           FUNCION PARA SACAR EL TAMAÑO DEL HDD DE UNA CARPETA                */
/********************************************************************************/

$bytestotal = 0;
$path = realpath($path);
if($path!==false && $path!='' && file_exists($path)){
    foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)) as $object){
        $bytestotal += $object->getSize();
    }
}
$_SESSION['MEM'] =  $bytestotal;

////////////////////////////////////////////////////////////////////////////////// 
?>