<?php
include_once 'db.php';
$projectName = htmlspecialchars(trim($_POST['project-name']));
$projectIndex = htmlspecialchars(trim($_POST['project-index']));

if (($projectName || $projectIndex) == true) {
    addProject($projectName, $projectIndex);
    header('Location: /index.php');
}
