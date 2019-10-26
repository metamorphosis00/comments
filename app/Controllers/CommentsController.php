<?php

namespace App\Controllers;
use App\Core\Controller;

class CommentsController extends Controller {

    public function index()
    {
        return $this->view('comments.index');
    }

} 