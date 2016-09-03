<?php
class Controller
{   public $model;
    public $viewRenderer;
    function __construct()
    {
        $this->model=new Model();
        $this->viewRenderer=new View();
    }
}