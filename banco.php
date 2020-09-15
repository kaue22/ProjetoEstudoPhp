<?php

$bdSevidor = '127.0.0.1';
$bdUsuario = 'tarefas';
$bdSenha = '12345';
$bdBanco = 'tarefas';

$conexao = mysqli_connect($bdSevidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)) {
    echo "Problemas ao se conectar. Erro:";
    echo mysqli_connect_error();
    die();
}

function busca_tarefas($conexao)
{

    $sqlBusca = 'SELECT * FROM cadastratarefa';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = [];

    while ($tarefa = mysqli_fetch_assoc($resultado)) {
        $tarefas[] = $tarefa;
    }

    return $tarefas;
}


function grava_tarefa($conexao, $tarefa)
{

    $sqlGravar = "INSERT INTO cadastratarefa(nome,descricao,prioridade) VALUES (
        '{$tarefa['nome']}',
        '{$tarefa['descricao']}',
        {$tarefa['prioridade']}
    )";

    //print_r(mysqli_query($conexao, $sqlGravar));
    mysqli_query($conexao, $sqlGravar);
}
