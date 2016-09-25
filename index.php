<?php
require('confs/main.php');
include('confs/db.php');

function getLiveMode()
{
    $query = "select propertyName, propertyValue from system_settings where propertyName='live_mode'";
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "", DB_USER, DB_PASSWORD);
    $sth = $conn->prepare($query);
    $sth->execute();
    $data = $sth->fetchAll();
   foreach ($data as $key)
   {
       echo $key['propertyName'];
       echo $key['propertyValue'];
   }
    return $data[0]['propertyValue'];
}

$livemode = getLiveMode();

if ($livemode == 'false') {
    echo '<html>
            <head>
             <title> BladeknightHUN\'s website Under Construction</title>
             <link rel="stylesheet" type="text/css" href="uc.css">
            </head>
            <body>
              <div style="background-color: black; height:100%;">
               <img src="uc.png" style="width:100%;">
              </div>
            </body>
          </html>
';
} else {
    require LIB_PATH . 'Loader.php';
    require LIB_PATH . 'Controller.php';
    require LIB_PATH . 'Model.php';
    require LIB_PATH . 'View.php';
    $app = new Loader();


}

