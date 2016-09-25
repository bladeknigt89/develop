<?php

class ErrorPage extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function notImplemented()
    {
        $GLOBALS['errorMessage'] = 'A keresett Menüpont nem található';
        $this->viewRenderer->render('Error/index');
    }
}