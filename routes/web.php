<?php
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::setDefaultNamespace('App\Controllers');
SimpleRouter::get('/', 'CommentsController@index')->name('comments.index');
url('comments.index');
SimpleRouter::start();