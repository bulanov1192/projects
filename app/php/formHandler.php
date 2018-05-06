<?php
include_once 'db.php';
//Запрос на добавление проекта
$projectName = htmlspecialchars(trim($_POST['project-name']));
$projectIndex = htmlspecialchars(trim($_POST['project-index']));

//запрос на создание/изменение задачи
$taskName = htmlspecialchars(trim($_POST['task-name']));
$projectIndexTaskAdd = htmlspecialchars(trim($_POST['project-index__task-add']));
$taskStatus = htmlspecialchars(trim($_POST['task-status']));
$taskType = htmlspecialchars(trim($_POST['task-type']));
$taskDescription = htmlspecialchars(trim($_POST['task-description']));


// Добавление нового проекта если поступили данные для него из POST
if (($projectName || $projectIndex) == true) {
    $result = addProject($projectName, $projectIndex);
    if ($result == 'Такой проект уже существует, проверьте индекс или имя на уникальность') {
        return $result;
    }
    header('Location: /index.php');
}

// Добавление новой задачи если поступили данные для нее из POST

if (($taskName & $projectIndexTaskAdd & $taskStatus & $taskType & $taskDescription)==true) {

}