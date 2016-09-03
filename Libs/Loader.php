<?php

class Loader
{
    function __construct()
    {
        try {
            $url = $_GET['url'];
            $url = rtrim($url, '/');
            $url = explode('/', $url);
            if($url[0]=='')
            {
                header('location:/index');
            }
            $controllerName = $url[0] . '_Controller';
            if (file_exists(CONTROLLER_PATH . $controllerName . '.php')) {
                require CONTROLLER_PATH . $controllerName . '.php';
                $controller = new $url[0];
            }
            if (isset($url[2])) {
                $controller->{$url[1]}($url[2]);
            } else {
                if (isset($url[1])) {
                    $controller->{$url[1]}();
                }
            }
        } catch (Exception $e) {
            echo $e;
        }
    }
}