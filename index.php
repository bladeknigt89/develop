<?php
require('confs/main.php');
if (LIVE_MODE == false) {
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
require LIB_PATH.'Loader.php';
    $app=new Loader();


}

