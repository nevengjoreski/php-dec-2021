<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$twig = new class extends Environment {

    function __construct(){

        if(!file_exists('twig_cache')){
            mkdir('twig_cache');
        }

        $config = [
            "debug" => true,
            "cache" => 'twig_cache',
            'auto_reload' => true
        ];

        $loader = new FilesystemLoader('twig_templates');

        parent::__construct($loader, $config);
    }
};
?>