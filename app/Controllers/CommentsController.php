<?php

namespace App\Controllers;
use App\Core\Controller;

class CommentsController extends Controller {

    public function index()
    {
        $this->data['comments'] = $this->db->query('SELECT * FROM comments WHERE status=?', [1]);
        return $this->render('comments.index');
    }
} 