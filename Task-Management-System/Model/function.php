<?php

function dd( $test )
{
    echo "<pre>";
    var_dump( $test );
    echo "<pre>";
    die();
}

function redirect( $path )
{
    header("location: /{$GLOBALS["folder"]}/index.php{$path}");
    exit();
}

function view( $path, $attribute = [] )
{   
    extract($attribute);
    return require "View/" . $path;
}