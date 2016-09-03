<?php

class Model
{
    private $dbconn;
    function __construct()
    {
        //$this->establishCon();
    }
    function establishCon()
    {
        require ('confs/db.php');
    }
}