<?php
session_start();
require 'banco.php';

if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
    $tarefa = [];
    $tarefa['nome'] = $_GET['nome'];
}else{
    $tarefa['nome'] = '';
}

if (array_key_exists('descricao', $_GET)) {
    $tarefa['descricao'] = $_GET['descricao'];
} else {
    $tarefa['descricao'] = '';
}

if (array_key_exists('prazo', $_GET)) {
    $tarefa['prazo'] = $_GET['prazo'];
} else {
    $tarefa['prazo'] = '';
}
if (array_key_exists('prioridade', $_GET)) {
    $tarefa['prioridade'] = $_GET['prioridade'];
}else{
    $tarefa['prioridade'] = '';
}
if (array_key_exists('concluida', $_GET)) {
    $tarefa['concluida'] = $_GET['concluida'];
} else {
    $tarefa['concluida'] = '';
}
//$_SESSION['$lista_tarefas'][] = $tarefa;

grava_tarefa($conexao, $tarefa);
/*echo("GRAVA tarefa");
echo("<br>");
print_r(grava_tarefa($conexao, $tarefa));*/
$lista_tarefas = [];
echo("<br>");
if (array_key_exists('$lista_tarefas', $_SESSION)) {

    $lista_tarefas = busca_tarefas($conexao);
}
$lista_tarefas = busca_tarefas($conexao);
include "template.php";
