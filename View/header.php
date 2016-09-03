<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <?php
    foreach ($GLOBALS['cssFileNames'] as $css)
        echo '<link rel="stylesheet" href="' . CSS_PATH . $css . '.css">' ?>
</head>
<body>
<div class="container-fluid main" id="main_container">
    <div class="row">
        <div class="col-md-12 col-sm-12" id="logoDiv" style="text-align: center;">Logo</div>
    </div>