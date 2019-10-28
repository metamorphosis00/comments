<?php

namespace App\Core;

class Controller {

    private $view;
    protected $db;
    protected $data = [];

    public function __construct()
    {
        $this->view  = new View();
        $this->db    = new DB();
    }

    public function view($viewName, $params = [])
    {
        $viewFile = $this->view->getViewPath($viewName);
        if (!file_exists($viewFile)) {
            throw new \Exception('View '.$viewName.' not found in path '.$viewFile);
        }
        extract($params);
        ob_start();
        include_once $viewFile;
        $body = ob_get_clean();
        return $body;
    }

    public function render($viewName)
    {
        return $this->view($viewName, $this->data);
    }
} 