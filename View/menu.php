<?php $menuPoints = array(
    array('name' => 'Kezdőlap', 'link' => 'index','active'=>'true'),
    array('name' => 'Galéria', 'link' => 'galery','active'=>'false'),
    array('name' => 'Árlista', 'link' => 'prices','active'=>'false')
);
?>

    <body>
        <nav class="navbar navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a href="index.php" class="navbar-brand" id="logo">Haj és Szépségápolás</a> </div>
                <div class="collapse navbar-collapse" id="navBar">
                    <ul class="nav navbar-nav navbar-right">
            <?php foreach ($menuPoints as $menuPoint) {
                $link = $menuPoint['link'];
                $name = $menuPoint['name'];
                $menuHtml = "<li"; 
                if($menuPoint['active'] == true){
                    $menuHtml .= " class='active' ";
                }
                $menuHtml .= "><a href='" . $link . ".php'>$name</a></li>";
                echo $menuHtml;
        } ?>
                    </ul>
                </div>
            </div>
        </nav>