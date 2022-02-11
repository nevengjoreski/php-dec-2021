<?php

if( !function_exists('getSiteUrl')){
    function getSiteUrl($url){
        return ROOT_URL . $url;
    }
}


if( !function_exists('pre')){
    function pre($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}


if( !function_exists('post')){
    function post(){
        return $_POST;
    }
}