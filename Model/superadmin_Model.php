<?php
class SuperadminModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getSettings()
    {
        $settings=$this->settingsArray;
        return $settings;
    }

}