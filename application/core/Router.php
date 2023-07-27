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
    }

    public function add($route, $params)
    {
        echo '<p>' . $route . '</p>';
    }
}