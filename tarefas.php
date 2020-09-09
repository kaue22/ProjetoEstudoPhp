<?php session_start();


if (array_key_exists('nome', $_GET)) {
    $_SESSION['$lista_tarefas'][] = $_GET['nome'];

    //print_r(($_SESSION['$lista_tarefas']));
}

$lista_tarefas = [];

if (array_key_exists('$lista_tarefas', $_SESSION)) {

    $lista_tarefas = $_SESSION['$lista_tarefas'];
}

include "template.php";
