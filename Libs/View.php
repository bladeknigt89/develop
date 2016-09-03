<?php

class View
{
    function __construct()
    {
        $this->showHeader();
    }

    public function render($renderFile)
    {
        require('View/'.$renderFile.'.php');
    }

    function showHeader()
    {
        require ($_SERVER['DOCUMENT_ROOT'].'/View/header.php');
        require ($_SERVER['DOCUMENT_ROOT'].'/View/menu.php');
    }
    function showFooter()
    {
        require ('View/footer.php');
    }

}