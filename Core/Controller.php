<?php

namespace Core;

class Controller
{

    //controller class
    public function view($view, $data = [])
    {
        //view function
        extract($data);
        return require_once base_path("app/views/{$view}.view.php");
    }

    public function model($model)
    {
        //model function
        return new $model;
    }



}