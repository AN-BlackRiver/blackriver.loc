<?php

namespace app\controllers;

use blrw\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        var_dump($this->model);
    }


}