<?php

namespace App\Core;

use \Exception;

class View {
    private $viewsDir;
    private $layoutsDir;

    public function __construct()
    {
        $this->viewsDir   = __DIR__.'/../../views/';
        $this->layoutsDir = __DIR__.'/../../views/layouts/';
    }

    public function getViewPath($viewName)
    {
        $viewFile = $this->viewsDir.str_replace('.', '/', $viewName).'.php';
        if (!file_exists($viewFile)) {
            throw new Exception('View '.$viewName.' not found in path '.$viewFile);
        }
        return $viewFile;
    }

    public function getLayoutPath($layoutName)
    {
        $layoutFile = $this->layoutsDir.str_replace('.', '/', $layoutName).'.php';
        if (!file_exists($layoutFile)) {
            throw new Exception('Layout '.$layoutName.' not found in path '.$layoutFile);
        }
        return $layoutFile;
    }
}