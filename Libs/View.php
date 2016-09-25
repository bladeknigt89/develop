<?php

class View
{
    protected $settings;
    function __construct($setings)
    {
        $this->settings=$setings;
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