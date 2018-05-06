<?php

$connection = mysqli_connect('localhost', 'mysql', 'mysql', 'projects');


// Добавление проекта в базу

function addProject($project_name, $project_index ) {
    global $connection;
    mysqli_query($connection, "SELECT * FROM `projects` WHERE `project_name` = $project_name or `project_index` = $project_index");
    if ($connection !== mysqli_error($connection)) {
        mysqli_query($connection, "INSERT INTO `projects`( `project_name`, `project_index`) VALUES ('$project_name', '$project_index')");
        mysqli_close($connection);
    }
    else {
        return 'Такой проект уже существует, проверьте индекс или имя на уникальность';
    }

}

// Вывод проектов на страницу index
function getProject() {
    global $connection;
    $result = mysqli_query($connection, "SELECT * FROM `projects`");
    if (!$result) {//вернуть пустое значение, если нет проектов
        return false;
    }
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC); //вывести массив проектов в переменную
    return $items; //вернуть переменную с массивом проектов
};

// Вывод задач на страницу tasks
function getTasks() {
    global $pid;
    global $connection;
    if ($pid == 'all') {//присвоить значение all, чтобы вывелись задачи по всем проектам (переменная юзается на taskList.php)
        $result = mysqli_query($connection, "SELECT * FROM `tasks`");
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $items;
    }
    else { //если передано в get айди проекта - выводить только по нему задачи
        $result = mysqli_query($connection, "SELECT * FROM `tasks` WHERE `project_id` = $pid");
        $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $items;
    }

}

// Добавление задачи в базу

//function addTask($taskName, $projectIndexTaskAdd, $taskStatus, $taskType, $taskDescription) {
//    global $connection;
//    $
//}



