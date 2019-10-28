<?php
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('App\Controllers');
SimpleRouter::get('/', 'CommentsController@index');
SimpleRouter::start();