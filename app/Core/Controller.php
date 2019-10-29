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

    public function view($viewName, $params = [], $layout = 'main')
    {
        $viewFile = $this->view->getViewPath($viewName);
        if (!file_exists($viewFile)) {
            throw new \Exception('View '.$viewName.' not found in path '.$viewFile);
        }
        extract($params);

        $result = '';


        ob_start();
        include_once $this->view->getLayoutPath($layout.'.header');
        $result .= ob_get_clean();

        ob_start();
        include_once $viewFile;
        $result .= ob_get_clean();

        ob_start();
        include_once $this->view->getLayoutPath($layout.'.footer');
        $result .= ob_get_clean();

        return $result;
    }

    public function render($viewName, $layout = 'main')
    {
        return $this->view($viewName, $this->data, $layout);
    }
} 