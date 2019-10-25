<?php

namespace App\Core;

class Controller {

    private $view;

    public function __construct()
    {
        $this->view  = new View();
    }

    public function view($viewName, $params = [])
    {
        require_once $this->view->getViewPath($viewName);
        extract($params);
        return '';
    }
} 