<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href='//fonts.googleapis.com/css?family=Clicker Script' rel='stylesheet'>
    <link href='//fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?php
    foreach ($GLOBALS['cssFileNames'] as $css)
        echo '<link rel="stylesheet" href="' . CSS_PATH . $css . '.css">'; ?>
</head>