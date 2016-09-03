<div class="container menu" ">
<div class="row">
    <nav class="navbar navbar-default blackbar" role="navigation">
        <?php foreach ($GLOBALS['menuPoints'] as $menuPoint) {
            $menuHtml = '<div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">';
            if ($menuPoint['active'] == "true") {
                $link = $menuPoint['link'];
                $name = $menuPoint['name'];
                $menuHtml .= "<li class='menuLink'> <a href='" . $link . "' style='color:red;'>$name</a></li>";
            }
            $menuHtml .= '</ul>';
            echo $menuHtml;
        } ?>
    </nav>

</div>
</div>
<div style="height: 50px;"></div>

