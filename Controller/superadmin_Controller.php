<?php

class SuperAdmin extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->renderIndex();
        $this->viewRenderer->showFooter();
    }

    function renderIndex()
    {
        if (!isset($_SESSION['adminuserName'])) {
            $this->viewRenderer->render('Superadmin/index');
        } else {
            $this->viewRenderer->render('Superadmin/admin');
        }
    }

    public function login()
    {
        var_dump($_POST);
//        echo $_POST['username'].'</br>';
//        echo $_POST['password'];
    }


}