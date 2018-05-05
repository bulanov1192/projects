<?php

$connection = mysqli_connect('localhost', 'mysql', 'mysql', 'projects');


// Добавление проекта в базу

function addProject($project_name, $project_index ) {
    global $connection;
    mysqli_query($connection, "INSERT INTO `projects`( `project_name`, `project_index`) VALUES ('$project_name', '$project_index')");
    mysqli_close($connection) or die(mysqli_error($connection));
}


function getProject() {
    global $connection;
    $result = mysqli_query($connection, "SELECT * FROM `projects`");
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $items;
};



