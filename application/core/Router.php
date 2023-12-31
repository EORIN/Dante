<?php

namespace application\core;

class Router
{

    protected $routes = [];
    protected $params = [];

    public function __construct()
    {

        $arr = require 'application/config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
        debug($this->routes);
        $this->run();
    }

    public function add($route, $params)
    {
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;
    }

    public function match(){
        debug($_SERVER);
        $url = $_SERVER['REQUEST_URI'];
    }
    public function run(){

        echo 1;
        $this->match();
        echo 1;
    }
}