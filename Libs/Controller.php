<?php
class Controller
{   public $model;
    public $viewRenderer;
    protected $settings;
    function __construct()
    {
        $this->model=new Model();
        $this->settings=$this->model->loadConfigs();
        $this->viewRenderer=new View($this->settings);
    }
}