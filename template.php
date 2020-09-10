<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="tarefas.css" type="text/css" />
</head>

<body>

    <h1>Gerenciador de Tarefas</h1>
    <form>
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label>
                Tarefa:
                <input type="text" name="nome" />
            </label>

            <!--     <input type="submit" value="Cadastrar" /> -->
        </fieldset>


        <label>
            Descrição (Opcional):
            <textarea name="descricao"></textarea>
        </label>


        <label>
            Prazo (Opcional):
            <input type="text" name="prazo" />
        </label>

        <fieldset>
            <legend>Prioridade:</legend>
            <label>
                <input type="radio" name="prioridade" value="1" checked /> Baixa
                <input type="radio" name="prioridade" value="2" /> Média
                <input type="radio" name="prioridade" value="3  " /> Alta
            </label>
        </fieldset>
        <label>
            Tarefa Concluída:

            <input type="checkbox" name="concluido" value="sim" />

        </label>

        <input type="submit" value="Cadastrar" />
    </form>

    <table>
        <tr>
            <th>Tarefas</th>
            <th>Descrição</th>
            <th>Prazo</th>
            <th>Prioridade</th>
            <th>Concluido</th>
        </tr>
        <?php foreach ($lista_tarefas as $tarefas) : ?>
            <tr>
                <td><?php echo $tarefas['nome']; ?></td>
                <td><?php echo $tarefas['descricao']; ?></td>
                <td><?php echo $tarefas['prazo']; ?></td>
                <td><?php echo $tarefas['prioridade']; ?></td>
                <td><?php echo $tarefas['concluido']; ?></td>

            </tr>


        <?php endforeach; ?>


    </table>
</body>

</html>