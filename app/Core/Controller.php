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
        $viewFile = $this->view->getViewPath($viewName);
        if (!file_exists($viewFile)) {
            throw new \Exception('View '.$viewName.' not found in path '.$viewFile);
        }
        extract($params);
        $body = include_once $viewFile;
        return $body;
    }
} 