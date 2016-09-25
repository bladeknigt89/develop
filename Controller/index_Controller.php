<?php

class Index extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->renderIndex();
        $this->viewRenderer->showFooter();
    }
    function renderIndex()
    {
        $this->viewRenderer->render('Index/index');
    }


}