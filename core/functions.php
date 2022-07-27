<?php


function view($view, $data = []) {

    extract($data);


    require "views/{$view}.view.php";
}



function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

