<?php

namespace App\Core;


class View {
    const DIRECTORY = '/views/';

    public function getViewPath($viewName)
    {
        $viewName = str_replace('.', '/', $viewName);
        return self::DIRECTORY.$viewName.'.php';
    }
} 