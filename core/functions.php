<?php


function fetchAllTasks($pdo)
{
    $query = $pdo->prepare("SELECT * FROM tasks");

    $query->execute();

    return $query->fetchAll(PDO::FETCH_OBJ);
}

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

