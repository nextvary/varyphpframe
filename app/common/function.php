<?php
function config($param){
    $fenge=DIRECTORY_SEPARATOR;

    $params=explode('.',$param);
    $file=$params[0];
    $key=$params[1];
    $path= dirname(app_path()).$fenge.'config'.$fenge.$file.'.php';
    if(!file_exists($path)) throw new Exception($file.' Not Found!!');
    $conent=require $path;
    return $conent[$key];
}
function app_path(){
    return  dirname(__DIR__);
}
function base_path(){
    return  dirname(app_path());
}

function storage_path(){
    $fenge=DIRECTORY_SEPARATOR;
    return base_path().$fenge.'storage'.$fenge.'/logs/';

}